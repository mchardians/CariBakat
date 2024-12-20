<x-app-layout title="Daftar Lowongan">
    <x-slot name="content">
        <div class="page-inner">
            <x-partials.template.page-header title="Lowongan Pekerjaan"
                breadcrumbs="dashboard, lowongan pekerjaan"/>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Data Lowongan Pekerjaan</h4>
                                <div class="page-navs shadow-none mx-auto d-none d-lg-block">
                                    <div class="nav-scroller">
                                        <div class="nav nav-tabs nav-line nav-color-success">
                                            <a class="nav-link active show" data-toggle="tab" href="#tab1">
                                                <i class="fa fa-archive mr-2"></i>Draft
                                            </a>
                                            <a class="nav-link" data-toggle="tab" href="#tab2">
                                                <i class="fa fa-briefcase mr-3"></i>Active
                                            </a>
                                            <a class="nav-link" data-toggle="tab" href="#tab3">
                                                <i class="fa fa-door-closed mr-3"></i>Expired
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-success btn-round ml-auto" href="{{ route('lowongan.create') }}">
                                    <i class="fa fa-plus mr-2"></i>
                                    Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="jobvacancy-table" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul Lowongan</th>
                                            <th>Departemen</th>
                                            <th>Tipe Pekerjaan</th>
                                            <th>Lowongan Dibuat</th>
                                            <th>Lowongan Berakhir</th>
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
        </div>
    </x-slot>
    <x-slot name="scripts">
        <script src="{{ asset('assets/template/js/plugin/datatables/datatables.min.js') }}"></script>
        <script src="{{ asset('assets/template/js/datatable/jobvacancy-datatable.js') }}"></script>
        <script src="{{ asset('assets/template/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/template/js/action/jobvacacy-action.js') }}"></script>
    </x-slot>
</x-app-layout>
