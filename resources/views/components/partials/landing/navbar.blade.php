<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">JobEntry</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? "active" : "" }}">Beranda</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? "active" : "" }}">Tentang Kami</a>
            <a href="{{ route('careers') }}" class="nav-item nav-link {{ request()->routeIs('careers') ? "active" : "" }}">Peluang Karir</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? "active" : "" }}">Hubungi Kami</a>
            <a href="{{ route('signin') }}" class="nav-item nav-link d-lg-none">
                Masuk<i class="fa fa-sign-in-alt ms-3"></i>
            </a>
        </div>
        <button class="btn btn-primary rounded-3 py-2 px-lg-3 me-4 d-none d-lg-block" onclick="window.location.href='{{ route('signin') }}'">
            Masuk<i class="fa fa-sign-in-alt ms-3"></i>
        </button>
    </div>
</nav>
<!-- Navbar End -->
