<x-landing-layout title="Profile" class="bg-secondary">
    <x-slot name="stylesheets">
        <style>
            .bg-secondary {
                background-color: #f1f4f5 !important;
            }

            .card > .nav-pills > .nav-item > a:not(.active):hover,
            .d-flex > div > a.text-primary:hover {
                background-color: #cccccc;
            }

            .nav-item {
                min-height: 48px !important;
            }
        </style>
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid container-lg py-4 px-5 my-3 my-lg-5">
            <div class="row g-3">
                <!-- Left Column -->
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <!-- Profile Card -->
                    <div class="card p-3 rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Profile Picture -->
                            <img src="{{ asset('storage/' . $user->profile->profile_picture) }}" alt="User Avatar" class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
                            <!-- Profile Information -->
                            <div>
                                <h5 class="fw-bold mb-1">{{ $user->fullname }}</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Menu -->
                    <div class="card mt-4 rounded-3 p-3">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item fw-bold mb-2">
                                <a class="nav-link rounded-3 active" href="#"><i class="bi bi-person me-3"></i>Informasi Pribadi</a>
                            </li>
                            <!-- Additional Menu Items -->
                        </ul>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <!-- Curriculum Vitae -->
                    <div class="card rounded-3 p-3">
                        <h4 class="fw-bold">Curriculum Vitae</h4>
                        <p class="text-muted small m-0">
                            CariBakat akan menghasilkan Curriculum Vitae (CV) secara otomatis berdasarkan data profil yang Anda lengkapi.
                        </p>
                        <div class="alert alert-warning d-flex align-items-center small rounded-3 mt-3" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            <div>
                                Peringatan! Gunakan CV dari sistem kami agar proses rekrutmen dapat berjalan lancar.
                            </div>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary rounded-3">
                                <i class="bi bi-file-earmark-text me-1"></i> Lihat CV
                            </button>
                        </div>
                    </div>

                    <!-- Personal Information Tab -->
                    <div class="card mt-4 rounded-3 p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                            <!-- Title and Description -->
                            <div class="mb-3">
                                <h4 class="text-primary"><i class="bi bi-info-circle fs-4 me-3"></i>Informasi Pribadi</h4>
                                <p class="text-muted small mb-0">Pastikan data pribadi benar untuk mempermudah proses pendaftaran</p>
                            </div>

                            <!-- Edit Icon -->
                            <div>
                                <button class="text-decoration-none text-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                    <i class="bi bi-pencil-square fs-4"></i>
                                </button>
                            </div>
                        </div>
                        <dl class="my-3">
                            <!-- About Me -->
                            <div class="my-3">
                                <dt class="h6">Tentang Saya</dt>
                                <dd>{{ $user->profile->bio ?? 'Belum ada informasi tentang diri.' }}</dd>
                            </div>

                            <!-- Full Name -->
                            <div class="my-3">
                                <dt class="h6">Nama Lengkap</dt>
                                <dd>{{ $user->fullname }}</dd>
                            </div>

                            <!-- Two-Column Layout for the rest -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <dt class="h6">NIK</dt>
                                    <dd>{{ $user->profile->nik ?? 'NIK tidak diketahui' }}</dd>
                                </div>
                                <div class="col-sm-6">
                                    <dt class="h6">Jenis Kelamin</dt>
                                    <dd>{{ $user->profile->gender ?? 'Tidak Diketahui' }}</dd>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <dt class="h6">Tempat Lahir</dt>
                                    <dd>{{ $user->profile->tempat_lahir ?? 'Tempat lahir tidak diketahui' }}</dd>
                                </div>
                                <div class="col-sm-6">
                                    <dt class="h6">Tanggal Lahir</dt>
                                    <dd>{{ \Carbon\Carbon::parse($user->profile->birth_date)->format('d F Y') ?? 'Tanggal lahir tidak diketahui' }}</dd>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <dt class="h6">Email</dt>
                                    <dd>{{ $user->email }}</dd>
                                </div>
                                <div class="col-sm-6">
                                    <dt class="h6">Telepon</dt>
                                    <dd>{{ $user->phone }}</dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Profile -->
        <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProfileModalLabel">Edit Profil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('pelamar.profile.update', $user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Bio -->
                            <div class="mb-3">
                                <label for="bio" class="form-label">Tentang Saya</label>
                                <textarea class="form-control" id="bio" name="bio">{{ $user->profile->bio }}</textarea>
                            </div>

                            <!-- Full Name -->
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" value="{{ old('fullname', $user->fullname) }}">
                            </div>

                            <!-- NIK -->
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik', $user->profile->nik) }}">
                            </div>

                            <!-- Gender -->
                            <div class="mb-3">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="gender" name="gender">
                                    <option value="Laki - Laki" {{ old('gender', $user->profile->gender) == 'Laki - Laki' ? 'selected' : '' }}>Laki - Laki</option>
                                    <option value="Perempuan" {{ old('gender', $user->profile->gender) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>

                            <!-- Birth Date -->
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date', $user->profile->birth_date) }}">
                            </div>

                            <!-- Place of Birth -->
                            <div class="mb-3">
                                <label for="birth_place" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="birth_place" name="birth_place" value="{{ old('birth_place', $user->profile->tempat_lahir) }}">
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" readonly>
                            </div>

                            <!-- Phone -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telepon</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
                            </div>

                            <!-- Profile Picture -->
                            <div class="mb-3">
                                <label for="profile_picture" class="form-label">Foto Profil</label>
                                <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-landing-layout>
