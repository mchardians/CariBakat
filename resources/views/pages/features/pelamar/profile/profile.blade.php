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
                <!-- Kolom Kiri -->
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <!-- Kartu Profile -->
                    <div class="card p-3 rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Foto Profil -->
                            <img src="https://via.placeholder.com/80" alt="User Avatar" class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">

                            <!-- Informasi Profil -->
                            <div>
                                <h5 class="fw-bold mb-1">Mochammad Ardiansyah</h5>
                                <p class="text-muted mb-2 small">ardianbro1310@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Menu Navigasi -->
                    <div class="card mt-4 rounded-3 p-3">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item fw-bold mb-2">
                                <a class="nav-link rounded-3 active" href="#"><i class="bi bi-person me-3"></i>Informasi Pribadi</a>
                            </li>
                            <li class="nav-item fw-bold mb-2">
                                <a class="nav-link rounded-3" href="#"><i class="bi bi-clock-history me-3"></i>Riwayat Karier</a>
                            </li>
                            <li class="nav-item fw-bold mb-2">
                                <a class="nav-link rounded-3" href="#"><i class="bi bi-book me-3"></i>Pendidikan</a>
                            </li>
                            <li class="nav-item fw-bold mb-2">
                                <a class="nav-link rounded-3" href="#"><i class="bi bi-tools me-3"></i>Keahlian</a>
                            </li>
                            <li class="nav-item fw-bold mb-2">
                                <a class="nav-link rounded-3" href="#"><i class="bi bi-patch-check me-3"></i>Sertifikasi</a>
                            </li>
                            <li class="nav-item fw-bold mb-2">
                                <a class="nav-link rounded-3" href="#"><i class="bi bi-file-text me-3"></i>Curriculum Vitae</a>
                            </li>
                            <li class="nav-item fw-bold mb-2">
                                <a class="nav-link rounded-3" href="#"><i class="bi bi-briefcase me-3"></i>Status Lamaran</a>
                            </li>
                            <li class="nav-item fw-bold mb-2">
                                <a class="nav-link rounded-3" href="#"><i class="bi bi-shield-check me-3"></i>Pengaturan Keamanan</a>
                            </li>
                            <li class="nav-item fw-bold mb-2">
                                <a class="nav-link text-danger rounded-3" href="#"><i class="bi bi-box-arrow-right me-3"></i>Pengaturan Keamanan</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom Kanan -->
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

                    <!-- Tabs -->
                    <div class="card mt-4 rounded-3 p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                            <!-- Judul dan Deskripsi -->
                            <div class="mb-3">
                                <h4 class="text-primary"><i class="bi bi-info-circle fs-4 me-3"></i>Informasi Pribadi</h4>
                                <p class="text-muted small mb-0">Pastikan data pribadi benar untuk mempermudah proses pendaftaran</p>
                            </div>

                            <!-- Icon Edit -->
                            <div>
                                <a href="#" class="text-decoration-none text-primary">
                                    <i class="bi bi-pencil-square fs-4"></i>
                                </a>
                            </div>
                        </div>
                        <dl class="my-3">
                            <div class="my-3">
                                <dt class="h6">Tentang Saya</dt>
                                <dd>Mahasiswa D3 Manajemen Informatika Politeknik Negeri Malang yang memiliki minat dan keterampilan dalam pemrograman website maupun mobile.</dd>
                            </div>
                            <div class="my-3">
                                <dt class="h6">Nama Lengkap</dt>
                                <dd>Mochammad Ardiansyah</dd>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <dt class="h6">Jenis Kelamin</dt>
                                    <dd>Laki - Laki</dd>
                                    <dt class="h6">Jenis Kelamin</dt>
                                    <dd>Laki - Laki</dd>
                                    <dt class="h6">Jenis Kelamin</dt>
                                    <dd>Laki - Laki</dd>
                                </div>
                                <div class="col-sm-6">
                                    <dt class="h6">Tanggal Lahir</dt>
                                    <dd>13 Oktober 2002</dd>
                                    <dt class="h6">Tanggal Lahir</dt>
                                    <dd>13 Oktober 2002</dd>
                                    <dt class="h6">Tanggal Lahir</dt>
                                    <dd>13 Oktober 2002</dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-landing-layout>