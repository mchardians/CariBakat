<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <img src="{{ asset('assets/landing/img/logocb.png') }}" alt="Logo" style="height: 65px; width: auto;">
        <h1 class="m-0 text-primary">CariBakat</h1>
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
            @auth
                @if (auth()->user()->role->name === "pelamar")
                    <a href="#" class="nav-item nav-link d-lg-none">
                        Lihat Profil
                    </a>
                    <a href="#" class="nav-item nav-link d-lg-none">
                        Riwayat Lamaran
                    </a>
                @endif
                <form action="{{ route('logout') }}" id="form-logout" method="POST">
                    @csrf
                    <a href="javascript:$('#form-logout').submit();" class="nav-item nav-link d-lg-none text-danger">
                        Logout <i class="fa fa-sign-out-alt ms-3"></i>
                    </a>
                </form>
            @else
                <a href="{{ route('signin') }}" class="nav-item nav-link d-lg-none">
                    Masuk<i class="fa fa-sign-in-alt ms-3"></i>
                </a>
            @endauth
        </div>
        @auth
            <div class="dropdown d-none d-lg-block">
                <!-- Trigger Dropdown -->
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle me-4 bg-primary text-white rounded-3 py-2 px-lg-2" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://via.placeholder.com/30" alt="User Avatar" class="rounded-circle img-fluid" width="30" height="30">
                    <span class="mx-2 fw-bold">{{ Str::of(auth()->user()->fullname)->limit(5) }}</span>
                </a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu dropdown-menu-end me-4 px-2" style="min-width: 300px !important;" aria-labelledby="userDropdown">
                    <li class="d-flex align-items-center">
                        <!-- Avatar -->
                        <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-circle me-3" width="40" height="40">
                        <!-- Informasi User -->
                        <div>
                            <p class="fw-bold mb-0">{{ auth()->user()->fullname }}</p>
                            <p class="text-muted small mb-0">{{ auth()->user()->email }}</p>
                        </div>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    @if (auth()->user()->role->name === "pelamar")
                        <li>
                            <a class="dropdown-item px-1" href="{{ route('pelamar.profile') }}"><i class="bi bi-person me-3"></i>Lihat Profil</a>
                        </li>
                        <li>
                            <a class="dropdown-item px-1" href="#"><i class="bi bi-briefcase me-3"></i>Status Lamaran</a>
                        </li>
                    @else
                        <li>
                            <a class="dropdown-item px-1" href="{{ route('hrd.dashboard') }}">Dashboard</a>
                        </li>
                    @endif
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('logout') }}" id="form-logout" method="POST">
                            <a class="dropdown-item text-danger px-1" href="javascript:$('#form-logout').submit();"><bi class="bi-box-arrow-right me-3"></bi>Logout</a>
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <button class="btn btn-primary rounded-3 py-2 px-lg-3 me-4 d-none d-lg-block" onclick="window.location.href='{{ route('signin') }}'">
                Masuk<i class="fa fa-sign-in-alt ms-3"></i>
            </button>
        @endauth
    </div>
</nav>
<!-- Navbar End -->
