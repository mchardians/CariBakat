<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DepartmentRequest;
use Yajra\DataTables\Facades\DataTables;
use Symfony\Component\HttpKernel\Exception\HttpException;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()) {
            $query = Department::select(['id', 'name', 'description']);

            return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function($data) {
                return (
                    "<div class='form-button-action'>
                        <button class='btn btn-icon btn-round btn-warning' value='".$data->id."' data-toggle='modal' data-target='#edit-department-modal' data-url='".route('department.edit', ['department' => ':id'])."'>
                            <i class='fa fa-edit'></i>
                        </button>
                        <button class='btn btn-icon btn-round btn-danger ml-2' value='".$data->id."' data-url='".route('department.destroy', ['department' => ':id'])."'>
                            <i class='fa fa-trash-alt'></i>
                        </button>
                    </div>"
                );
            })
            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.features.hrd.departemen.departemen');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentRequest $request)
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();

            Department::create($data);

            DB::commit();

            return response()->json([
                "success" => true,
                "message" => "Departemen berhasil ditambahkan!"
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
        try {
            $query = Department::select(["name", "description"])->findOrFail($id);

            return response()->json([
                "success" => true,
                "data" => $query
            ]);
        } catch(HttpException $e) {
            return response()->json([
                "success" => false,
                "data" => null,
                "message" => $e->getMessage()
            ], $e->getStatusCode());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartmentRequest $request, string $id)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();

            Department::findOrFail($id)->update($data);

            Db::commit();

            return response()->json([
                "success" => true,
                "message" => "Berhasil memperbarui data departemen!"
            ]);
        } catch (HttpException $e) {
            Db::rollBack();

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
            Department::findOrFail($id)->delete();

            DB::commit();

            return response()->json([
                "success" => true,
                "message" => "Berhasil menghapus data departemen!"
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