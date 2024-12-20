<x-app-layout title="Daftar Lowongan">
    <x-slot name="content">
        <div class="page-inner">
            <x-partials.template.page-header title="Bobot Kriteria" breadcrumbs="dashboard, bobot penilaian, bobot kriteria" />

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Data Kriteria Penilaian</h4>
                            <button class="btn btn-success btn-round ml-auto" data-toggle="modal"
                                data-target="#create-criteria-modal">
                                <i class="fa fa-plus"></i>
                                Tambah Kriteria
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Create Modal -->
                        <div class="modal fade" id="create-criteria-modal" tabindex="-1" role="dialog" aria-labelledby="create-criteria-modalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold" id="create-criteria-modalLabel">Tambah Kriteria Penilaian</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="create-criteria-form" action="{{ route('kriteria-penilaian.store') }}">
                                            <div class="form-group">
                                                <label for="name">Nama Kriteria</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Nama Kriteria">
                                            </div>
                                            <div class="form-group">
                                                <label for="weight">Bobot Nilai</label>
                                                <input type="text" class="form-control" id="weight" name="weight"
                                                    placeholder="Bobot Nilai">
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
                        <div class="modal fade" id="edit-criteria-modal" tabindex="-1" role="dialog" aria-labelledby="edit-criteria-modalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold" id="edit-criteria-modalLabel">Update Kriteria Penilaian</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="edit-criteria-form" data-url="{{ route('kriteria-penilaian.update', ['kriteria_penilaian' => ':id']) }}">
                                            <div class="form-group">
                                                <label for="edit-name">Nama Kriteria</label>
                                                <input type="text" class="form-control" id="edit-name" name="name"
                                                    placeholder="Nama Kriteria">
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-weight">Bobot Nilai</label>
                                                <input type="text" class="form-control" id="edit-weight" name="weight"
                                                    placeholder="Bobot Nilai">
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
                            <table id="criteria-table" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kriteria</th>
                                        <th>Bobot Nilai</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="scripts">
        <script src="{{ asset('assets/template/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/template/js/plugin/datatables/datatables.min.js') }}"></script>
        <script src="{{ asset('assets/template/js/datatable/criteria-datatable.js') }}"></script>
        <script src="{{ asset('assets/template/js/action/criteria-action.js') }}"></script>
        <script src="{{ asset('vendor/jsvalidation/js/jsvalidation.min.js') }}"></script>

        {!! JsValidator::formRequest('App\Http\Requests\CriteriaRequest', '#create-criteria-form') !!}
        {!! JsValidator::formRequest('App\Http\Requests\CriteriaRequest', '#edit-criteria-form') !!}
    </x-slot>
</x-app-layout>
