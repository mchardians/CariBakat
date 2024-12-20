<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CriteriaRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Yajra\DataTables\Facades\DataTables;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()) {
            $query = Criteria::select(['id', 'name', 'weight']);

            return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function($data) {
                return (
                    "<div class='form-button-action'>
                        <button class='btn btn-icon btn-round btn-warning' value='".$data->id."' data-toggle='modal' data-target='#edit-criteria-modal' data-url='".route('kriteria-penilaian.edit', ['kriteria_penilaian' => ':id'])."'>
                            <i class='fa fa-edit'></i>
                        </button>
                        <button class='btn btn-icon btn-round btn-danger ml-2' value='".$data->id."' data-url='".route('kriteria-penilaian.destroy', ['kriteria_penilaian' => ':id'])."'>
                            <i class='fa fa-trash-alt'></i>
                        </button>
                    </div>"
                );
            })
            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.features.hrd.kriteria-penilaian.kriteria');
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
    public function store(CriteriaRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();

            Criteria::create($data);

            DB::commit();

            return response()->json([
                "success" => true,
                "message" => "Berhasil menambahkan data kriteria penilaian!"
            ]);
        } catch (HttpException $e) {
            DB::rollBack();

            return response()->json([
                "success" => false,
                "message" => $e->getMessage()
            ], $e->getMessage());
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
            $query = Criteria::select(["name", "weight"])->findOrFail($id);

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
    public function update(CriteriaRequest $request, string $id)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();

            Criteria::findOrFail($id)->update($data);

            DB::commit();

            return response()->json([
                "success" => true,
                "message" => "Berhasil memperbarui data kriteria penilaian!"
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
            Criteria::findOrFail($id)->delete();

            DB::commit();

            return response()->json([
                "success" => true,
                "message" => "Berhasil menghapus data kriteria penilaian!"
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
