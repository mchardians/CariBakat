<x-landing-layout title="Peluang Karir">
    <x-slot name="content">
        <x-partials.landing.page-header title="Peluang Karir" breadcrumbs="beranda, peluang karir" />

        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0" placeholder="Keyword" />
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Category</option>
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">Category 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->

        <!-- Jobs Start -->
        <div class="container-xxl py-5" style="max-width: 100% !important;">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                                href="#tab-1">
                                <h6 class="mt-n1 mb-0">Featured</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                                href="#tab-2">
                                <h6 class="mt-n1 mb-0">Full Time</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                                href="#tab-3">
                                <h6 class="mt-n1 mb-0">Part Time</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-1.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-2.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Marketing Manager</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-3.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Product Designer</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-4.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Creative Director</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-5.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Wordpress Developer</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-1.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-2.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Marketing Manager</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-3.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Product Designer</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-4.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Creative Director</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-5.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Wordpress Developer</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-1.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-2.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Marketing Manager</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-3.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Product Designer</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-4.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Creative Director</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="{{ asset('assets/landing/img/com-logo-5.jpg') }}" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Wordpress Developer</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                                USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                                $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                            2045</small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->
    </x-slot>
</x-landing-layout>
