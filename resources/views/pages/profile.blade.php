<x-landing-layout title="Profile">
    <x-slot name="content">
        <x-partials.landing.page-header title="Profile" breadcrumbs="beranda, profile" class="mb-5" />

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <img src="https://via.placeholder.com/100" class="rounded-circle" alt="Profile Picture">
                                </div>
                                <h5 class="card-title">annisa rahmania</h5>
                                <p class="text-muted">anisarahmania313@gmail.com</p>
                                <button class="btn btn-outline-primary mt-3">Edit Profile</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Tentang Saya</h5>
                                <p class="text-muted fst-italic">Tak kenal, maka tak sayang. Perkenalkan dirimu secara singkat agar rekruter tertarik!</p>
                                <button class="btn btn-outline-primary mb-3">Edit</button>
                                <hr>
                                <h5 class="card-title mb-4">Data Diri</h5>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <p class="mb-0">Nama Lengkap</p>
                                        <p class="text-muted">annisa rahmania</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="mb-0">Nama Panggilan</p>
                                        <p class="text-muted">annisa rahmania</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <p class="mb-0">Tanggal Lahir</p>
                                        <p class="text-muted fst-italic">Isilah sesuai dengan identitasmu.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="mb-0">Jenis Kelamin</p>
                                        <p class="text-muted fst-italic">Isilah sesuai dengan identitasmu.</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <p class="mb-0">Nomor WhatsApp</p>
                                        <p class="text-muted fst-italic">Isilah sesuai dengan identitasmu.</p>
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary mb-3">Edit</button>
                                <hr>
                                <h5 class="card-title mb-4">Lokasi Saat Ini</h5>
                                <p class="text-muted fst-italic">Pastikan lokasi sesuai tempat tinggalmu sekarang.</p>
                                <button class="btn btn-outline-primary mb-3">Edit</button>
                                <hr>
                                <h5 class="card-title mb-4">Pendidikan</h5>
                                <p class="text-muted fst-italic">Mohon diisi dengan riwayat pendidikan yang pernah kamu tempuh</p>
                                <button class="btn btn-outline-primary">Tambah</button>

                                <hr>
                                <h5 class="card-title mb-4">Pengalaman Kerja</h5>
                                <p class="text-muted fst-italic">Jika memiliki pengalaman kerja, isilah sesuai dengan riwayat pekerjaanmu secara lengkap.</p>
                                <button class="btn btn-outline-primary">Tambah</button>

                                <hr>
                                <h5 class="card-title mb-4">Kemampuan (Skill)</h5>
                                <p class="text-muted fst-italic">Tambahkan kemampuan (skill) dasar hingga profesional yang kamu kuasai.</p>
                                <button class="btn btn-outline-primary">Ubah</button>

                                <hr>
                                <h5 class="card-title mb-4">CV</h5>
                                <p class="text-muted fst-italic">Pilih CV berformat PDF (maks. 5MB)</p>
                                <button class="btn btn-outline-primary">Upload CV</button>

                                <hr>
                                <h5 class="card-title mb-4">Link Medsos/Portofolio</h5>
                                <p class="text-muted fst-italic">Mohon diisi dengan link website, portofolio, atau media sosial profesionalmu.</p>
                                <button class="btn btn-outline-primary">Tambah</button>

                                <hr>
                                <h5 class="card-title mb-4">Preferensi Kerja</h5>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <p class="mb-0">Nama Pekerjaan</p>
                                        <p class="text-muted fst-italic">Isilah dengan nama pekerjaan sesuai keinginanmu.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="mb-0">Bidang Kerja</p>
                                        <p class="text-muted fst-italic">Isilah dengan bidang kerja sesuai keinginanmu.</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <p class="mb-0">Tipe Kontrak Kerja</p>
                                        <p class="text-muted fst-italic">Isilah dengan tipe kontrak kerja sesuai keinginanmu.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="mb-0">Kebijakan Bekerja</p>
                                        <p class="text-muted fst-italic">Pilih kebijakan bekerja onsite, remote, atau hybrid.</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <p class="mb-0">Lokasi Kerja</p>
                                        <p class="text-muted fst-italic">Pilihlah lokasi di mana kamu ingin bekerja.</p>
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary mb-3">Ubah</button>
                                <hr>
                                <h5 class="card-title mb-4">Gaji yang Diharapkan</h5>
                                <p class="text-muted fst-italic">Minimal gaji yang kamu harapkan.</p>
                                <button class="btn btn-outline-primary mb-3">Ubah</button>
                                <hr>
                                <h5 class="card-title mb-4">Topik yang Disukai</h5>
                                <p class="text-muted fst-italic">Isilah dengan topik yang kamu sukai agar KitaLulus dapat merekomendasikan komunitas & pembelajaran yang sesuai.</p>
                                <button class="btn btn-outline-primary mb-3">Ubah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-landing-layout>
