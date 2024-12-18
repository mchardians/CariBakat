<x-landing-layout title="Tentang Kami">
    <x-slot name="content">
        <x-partials.landing.page-header title="Tentang Kami" breadcrumbs="beranda,tentang kami" class="mb-5" />

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="{{ asset('assets/landing/img/about-1.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="{{ asset('assets/landing/img/about-2.jpg') }}" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="{{ asset('assets/landing/img/about-3.jpg') }}" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="{{ asset('assets/landing/img/about-4.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Tentang Kami - <span style="color: green;">CariBakat</span></h1>
                        <p class="mb-4"><span style="color: green;">CariBakat</span> adalah platform inovatif yang dirancang untuk membantu individu
                            menemukan dan mengembangkan bakat serta keterampilan mereka. Kami hadir sebagai jembatan antara pencari kerja,
                            perusahaan, dan peluang karier terbaik.</p>
                        <p class="mb-4">Dengan fitur personalisasi yang canggih, <span style="color: green;">CariBakat</span> menawarkan rekomendasi pekerjaan yang sesuai
                            dengan minat, bakat, dan kompetensi Anda. Kami percaya bahwa setiap individu memiliki potensi unik yang
                            dapat dikembangkan untuk mencapai kesuksesan.</p>
                        <p class="mb-4">Melalui antarmuka yang ramah pengguna dan teknologi terkini, kami berkomitmen untuk memudahkan
                            proses pencarian pekerjaan, eksplorasi bakat, serta pengembangan diri. <span style="color: green;">CariBakat</span> siap menjadi mitra terbaik
                            Anda dalam meraih masa depan yang lebih cerah.</p>
                        <h6><i class="fa fa-check text-primary me-3"></i>Peluang Karier Terbaik</h6>
                        <p>Temukan pekerjaan sesuai bakat dan keterampilan Anda.</p>
                        <h6><i class="fa fa-check text-primary me-3"></i>Rekomendasi Personalisasi</h6>
                        <p>Dapatkan peluang kerja yang paling cocok untuk Anda.</p>
                        <h6><i class="fa fa-check text-primary me-3"></i>Akses Cepat dan Mudah</h6>
                        <p>Cari pekerjaan impian dengan antarmuka yang sederhana dan intuitif.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </x-slot>
</x-landing-layout>
