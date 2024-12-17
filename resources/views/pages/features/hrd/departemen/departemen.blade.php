<x-app-layout title="Departemen">
    <x-slot name="content">
        <div class="page-inner">
            <x-partials.template.page-header title="Departemen" breadcrumbs="dashboard, departemen" />
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Data Departemen</h4>
                                <button class="btn btn-success btn-round ml-auto" data-toggle="modal" data-target="#create-department-modal">
                                    <i class="fa fa-plus mr-2"></i>
                                    Tambah Data
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Create Modal -->
                            <div class="modal fade" id="create-department-modal" tabindex="-1" role="dialog" aria-labelledby="create-department-modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold" id="create-department-modalLabel">Tambah Departemen</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="create-department-form" data-url="{{ route('department.store') }}">
                                                <div class="form-group">
                                                    <label for="name">Nama Departemen</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="Nama Departemen">
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Deskripsi</label>
                                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Deskripsi Departemen"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            <button type="button" class="btn btn-success" id="create-button">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="edit-department-modal" tabindex="-1" role="dialog" aria-labelledby="edit-department-modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold" id="edit-department-modalLabel">Update Departemen</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="edit-department-form" data-url="{{ route('department.update', ['department' => ':id']) }}">
                                                <div class="form-group">
                                                    <label for="edit-name">Nama Departemen</label>
                                                    <input type="text" class="form-control" id="edit-name" name="name"
                                                        placeholder="Nama Departemen">
                                                </div>
                                                <div class="form-group">
                                                    <label for="edit-description">Deskripsi</label>
                                                    <textarea class="form-control" id="edit-description" name="description" rows="3" placeholder="Deskripsi Departemen"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            <button type="button" class="btn btn-success" id="update-button">Simpan Perubahan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="department-table" class="display table table-striped table-hover" data-url="{{ route('hrd.department.index') }}">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Departemen</th>
                                            <th>Deskripsi</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('assets/template/js/plugin/datatables/datatables.min.js') }}"></script>
        <script src="{{ asset('assets/template/js/datatable/department-datatable.js') }}"></script>
        <script src="{{ asset('assets/template/js/action/department-action.js') }}"></script>
        <script src="{{ asset('assets/template/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('vendor/jsvalidation/js/jsvalidation.min.js') }}"></script>

        {!! JsValidator::formRequest('App\Http\Requests\DepartmentRequest', '#create-department-form') !!}
        {!! JsValidator::formRequest('App\Http\Requests\DepartmentRequest', '#edit-department-form') !!}
    </x-slot>
</x-app-layout>