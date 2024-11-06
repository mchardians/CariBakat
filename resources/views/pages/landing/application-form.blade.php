<x-landing-layout title="Application Form">
    <x-slot name="stylesheets">
        <link rel="stylesheet" href="{{ asset('assets/landing/css/quill.snow.css') }}">
    </x-slot>
    <x-slot name="content">
        <!-- HOME -->
        <section class="section-hero overlay inner-page bg-image"
            style="background-image: url('{{ asset('assets/landing/images/hero_1.jpg') }}');" id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-white font-weight-bold">Product Designer</h1>
                        <div class="custom-breadcrumbs">
                            <a href="#">Home</a> <span class="mx-2 slash">/</span>
                            <a href="{{ route('home') . '#jobs' }}">Job</a> <span class="mx-2 slash">/</span>
                            <a href="{{ route('job-details') }}">Product Designer</a> <span class="mx-2 slash">/</span>
                            <span class="text-white"><strong>Application Form</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-12 mb-4 mb-lg-0">
                        <div class="text-small">
                            <span>Anda melamar untuk posisi</span>
                        </div>
                        <div>
                            <h2>Nama Posisi / Tipe Pekerjaan / Nama Departemen</h2>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <form class="p-4 p-md-5 border rounded" method="post">
                            <h3 class="text-black mb-4 border-bottom pb-2">Form Lamaran Pekerjaan</h3>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email"
                                    placeholder="you@yourdomain.com">
                            </div>
                            <div class="form-group">
                                <label for="job-title">Job Title</label>
                                <input type="text" class="form-control" id="job-title"
                                    placeholder="Product Designer">
                            </div>
                            <div class="form-group">
                                <label for="job-location">Location</label>
                                <input type="text" class="form-control" id="job-location"
                                    placeholder="e.g. New York">
                            </div>

                            <div class="form-group">
                                <label for="job-region">Job Region</label>
                                <select class="selectpicker border rounded" id="job-region" data-style="btn-black"
                                    data-width="100%" data-live-search="true" title="Select Region">
                                    <option>Anywhere</option>
                                    <option>San Francisco</option>
                                    <option>Palo Alto</option>
                                    <option>New York</option>
                                    <option>Manhattan</option>
                                    <option>Ontario</option>
                                    <option>Toronto</option>
                                    <option>Kansas</option>
                                    <option>Mountain View</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="job-type">Job Type</label>
                                <select class="selectpicker border rounded" id="job-type" data-style="btn-black"
                                    data-width="100%" data-live-search="true" title="Select Job Type">
                                    <option>Part Time</option>
                                    <option>Full Time</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="job-description">Job Description</label>
                                <div class="editor" id="editor-1">
                                    <p>Write Job Description!</p>
                                </div>
                            </div>

                        </form>
                    </div>


                </div>
                <div class="row align-items-center mb-5">

                    <div class="col-lg-4 ml-auto">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('job-details') }}" class="btn btn-block btn-danger btn-md">Batal</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn btn-block btn-primary btn-md"><span
                                        class="icon-paper-plane mr-2"></span>Kirim</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
    <x-slot name="scripts">
        <script src="{{ asset('assets/landing/js/quill.min.js') }}"></script>
    </x-slot>
</x-landing-layout>
