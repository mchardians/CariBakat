<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\JobVacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\JobVacancyRequest;
use App\Models\Department;
use Yajra\DataTables\Facades\DataTables;
use Symfony\Component\HttpKernel\Exception\HttpException;

class JobVacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()) {
            $query = JobVacancy::join('departments', 'job_vacancies.department_id', '=', 'departments.id')
                ->select(['job_vacancies.id', 'title', 'departments.name as department', 'type', 'created', 'expired'])->where('status', '=', 'draft');

            return DataTables::of($query)
            ->addIndexColumn()
            ->editColumn('type', function($data) {
                return match($data->type) {
                    "full_time" => "<span class='badge badge-success'>Penuh Waktu</span>",
                    "half_time" => "<span class='badge badge-primary'>Paruh Waktu</span>",
                    "intern" => "<span class='badge badge-warning'>Program Magang</span>"
                };
            })
            ->addColumn('action', function($data) {
                return (
                    "<div class='form-button-action'>
                        <a href='".route('lowongan.edit', ['lowongan' => $data->id])."' class='btn btn-icon btn-round btn-warning d-flex align-items-center justify-content-center'>
                            <i class='fa fa-edit'></i>
                        </a>
                        <button class='btn btn-icon btn-round btn-danger ml-2' value='".$data->id."' data-url='".route('lowongan.destroy', ['lowongan' => ':id'])."'>
                            <i class='fa fa-trash-alt'></i>
                        </button>
                        <button class='btn btn-icon btn-round btn-primary ml-2' value='".$data->id."' data-url='".route('department.destroy', ['department' => ':id'])."'>
                            <i class='fa fa-eye'></i>
                        </button>
                    </div>"
                );
            })
            ->rawColumns(['type', 'action'])
            ->make();
        }

        return view('pages.features.hrd.lowongan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::select(['id', 'name'])->get();
        return view('pages.features.hrd.lowongan.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobVacancyRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $data["created"] = Carbon::parse( $data["created"])->format("Y-m-d H:i:s");
            $data["expired"] = Carbon::parse( $data["expired"])->format("Y-m-d H:i:s");

            JobVacancy::create($data);

            DB::commit();

            return response()->json([
                "success" => true,
                "message" => "Lowongan pekerjaan berhasil ditambahkan!"
            ]);
        } catch (HttpException $e) {
            DB::rollBack();

            return response()->json([
                "success" => false,
                "message" => $e->getMessage()
            ], $e->getStatusCode());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobVacancy = JobVacancy::findOrFail($id);
        $departments = Department::select(['id', 'name'])->get();

        return view('pages.features.hrd.lowongan.edit', compact('jobVacancy', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobVacancyRequest $request, string $id)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $data["created"] = Carbon::parse( $data["created"])->format("Y-m-d H:i:s");
            $data["expired"] = Carbon::parse( $data["expired"])->format("Y-m-d H:i:s");

            JobVacancy::findOrFail($id)->update($data);

            DB::commit();

            return response()->json([
                "success" => true,
                "message" => "Berhasil memperbarui data lowongan!"
            ]);
        } catch (HttpException $e) {
            DB::rollBack();

            return response()->json([
                "success" => false,
                "message" => $e->getMessage()
            ], $e->getStatusCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();

        try {
            JobVacancy::findOrFail($id)->delete();

            Db::commit();

            return response()->json([
                "success" => true,
                "message" => "Berhasil menghapus data lowongan!"
            ]);
        } catch (HttpException $e) {
            DB::rollBack();

            return response()->json([
                "success" => false,
                "message" => $e->getMessage()
            ], $e->getStatusCode());
        }
    }
}
