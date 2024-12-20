<x-app-layout title="Edit Lowongan">
    <x-slot name="stylesheets">
        <style>
            select.custom-select::-ms-expand {
                display: none;
            }

            select.custom-select {
                outline: none;
                overflow: hidden;
                text-indent: 0.01px;
                text-overflow: '';
                cursor: pointer;

                background: url("https://img.icons8.com/material/24/000000/sort-down.png") no-repeat right #fff;

                -webkit-appearance: none;
                -moz-appearance: none;
                -ms-appearance: none;
                -o-appearance: none;
                appearance: none;
            }
        </style>
        <link rel="stylesheet"
            href="{{ asset('assets/template/deps/bootstrapdatepicker/css/bootstrap-datetimepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/template/deps/summernote/summernote-bs4.min.css') }}">
    </x-slot>
    <x-slot name="content">
        <div class="page-inner">
            <x-partials.template.page-header title="Edit Lowongan"
                breadcrumbs="dashboard, daftar lowongan, edit lowongan" />

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Edit Lowongan Pekerjaan</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('lowongan.update', ['lowongan' => $jobVacancy->id]) }}" id="form-edit-jobvacancy">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="title">Judul Lowongan</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{ $jobVacancy->title }}" placeholder="Judul Lowongan">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="department">Department</label>
                                            <select class="form-control input-square custom-select" id="department" name="department_id">
                                                <option value="" disabled>Pilih Departemen</option>
                                                @foreach ($departments as $index => $department)
                                                    <option value="{{ $department->id }}" {{ $jobVacancy->department_id === $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi Lowongan</label>
                                    <textarea class="form-control summernote" id="description" name="description">{{ $jobVacancy->description }}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="type">Tipe Pekerjaan</label>
                                            <select class="form-control input-square custom-select" id="type" name="type">
                                                <option value="" disabled>Pilih Tipe Pekerjaan</option>
                                                <option value="full_time" {{ $jobVacancy->type === 'full_time' ? 'selected' : '' }}>Penuh Waktu</option>
                                                <option value="part_time" {{ $jobVacancy->type === 'part_time' ? 'selected' : '' }}>Paruh Waktu</option>
                                                <option value="intern" {{ $jobVacancy->type === 'intern' ? 'selected' : '' }}>Program Magang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="position">Posisi Dibutuhkan</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="position"
                                                    name="position" placeholder="Posisi dibutuhkan" value="{{ $jobVacancy->position }}"
                                                    aria-label="Posisi Dibutuhan" aria-describedby="position-addon">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="position-addon">Orang</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="responsibility">Tanggung Jawab Pekerjaan</label>
                                    <textarea class="form-control summernote" id="responsibility" name="responsibility">{{ $jobVacancy->responsibility }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="qualification">Kualifikasi Pekerjaan</label>
                                    <textarea class="form-control summernote" id="qualification" name="qualification">{{ $jobVacancy->qualification }}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="created">Waktu Dibuat</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="created"
                                                    name="created" value="{{ $jobVacancy->created }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="expired">Waktu Berakhir</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="expired"
                                                    name="expired" value="{{ $jobVacancy->expired }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center">
                                <div class="ml-auto">
                                    <button class="btn btn-danger mr-2" id="cancel-button">Kembali</button>
                                    <button class="btn btn-success" data-url="{{ route('hrd.lowongan.index') }}" id="update-button">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="scripts">
        <script src="{{ asset('assets/template/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/template/deps/summernote/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('assets/template/js/plugin/moment/moment.min.js') }}"></script>
        <script src="{{ asset('assets/template/deps/bootstrapdatepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="{{ asset('vendor/jsvalidation/js/jsvalidation.min.js') }}"></script>
        <script src="{{ asset('assets/template/js/action/jobvacacy-action.js') }}"></script>
        {!! JsValidator::formRequest('App\Http\Requests\JobVacancyRequest', '#form-edit-jobvacancy') !!}

        <script>
            $(document).ready(function() {
                $(".summernote").summernote({
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
                    tabsize: 10,
                    height: 200,
                    callbacks: {
                        onChange: function(contents) {
                            $(this).val(contents).trigger('change');
                        }
                    },
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['view', ['fullscreen', 'help']]
                    ]
                });

                const dateTimeOpt = {
                    format: 'DD-MM-YYYY HH:mm:ss',
                    icons: {
                        time: 'fa fa-clock'
                    },
                }

                $("#expired").datetimepicker(dateTimeOpt);

                dateTimeOpt.defaultDate = new Date();

                $("#created").datetimepicker(dateTimeOpt);

                $("#cancel-button").click(function(e) {
                    e.preventDefault();

                    swal({
                        title: 'Apa anda yakin?',
                        text: "Anda tidak dapat mengembalikan progres saat ini!",
                        type: 'warning',
                        buttons: {
                            cancel: {
                                visible: true,
                                text: 'Tidak, batal!',
                                className: 'btn btn-danger'
                            },
                            confirm: {
                                text: 'Ya, kembali!',
                                className: 'btn btn-success'
                            }
                        }
                    }).then((willCancel) => {
                        if (willCancel) {
                            document.location.href = "{{ route('hrd.lowongan.index') }}";
                        } else {
                            swal("Progres anda tetap aman!", {
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        }
                    });
                });
            });
        </script>
    </x-slot>
</x-app-layout>
