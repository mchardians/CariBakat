<!--Navbar Mobile-->
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<!--Navbar Desktop-->
<header class="site-navbar mt-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="site-logo col-6">
                <a href="{{ route('home') }}" class="p-1 font-weight-bolder">CariBakat</a>
            </div>

            <nav class="mx-auto site-navigation">
                <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                    <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? "active font-weight-bold":"" }}">Beranda</a></li>
                    <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                    <li><a href="{{ route('home'). "#jobs" }}" class="scroll-button smoothscroll">Lowongan</a></li>
                    <li class="d-lg-none"><a href="{{ route('signup') }}">Daftar</a></li>
                    <li class="d-lg-none"><a href="{{ route('signin') }}">Masuk</a></li>
                </ul>
            </nav>

            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                <div class="ml-auto">
                    <a href="{{ route('signup') }}" class="btn btn-warning border-width-2 d-none d-lg-inline-block"><span
                            class="mr-2 icon-person_outline"></span>Daftar</a>
                    <a href="{{ route('signin') }}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span
                            class="mr-2 icon-lock_outline"></span>Masuk</a>
                </div>
                <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span
                        class="icon-menu h3 m-0 p-0 mt-2"></span></a>
            </div>

        </div>
    </div>
</header>
