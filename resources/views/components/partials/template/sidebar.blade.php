<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    @auth
                        @switch(auth()->user()->role->name)
                            @case('hrd')
                                <img src="{{ asset('assets/template/img/hrd-user-icon.png') }}" alt="image profile"
                                    class="avatar-img rounded-circle" style="background-color: gray;">
                            @break

                            @case('manajer')
                            @break

                            @default
                                <img src="{{ asset('assets/template/img/profile.jpg') }}" alt="image profile"
                                    class="avatar-img rounded-circle">
                        @endswitch
                    @endauth
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ auth()->user()->fullname }}
                            <span class="user-level">{{ ucfirst(auth()->user()->fullname) }}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('home') }}">
                                    <span class="link-collapse d-inline-block visit">
                                        <i class="fas fa-globe mr-2"></i>
                                        Visit Home Page
                                    </span>
                                </a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" id="form-logout" method="POST">
                                    @csrf
                                    <a class="link-collapse text-danger fw-bold"
                                        href="javascript:$('#form-logout').submit();">
                                        <i class="fas fa-sign-out-alt mr-2"></i>
                                        Logout
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-success">
                @auth
                    @switch(auth()->user()->role->name)
                        @case('pelamar')
                        @break

                        @case('hrd')
                            <li class="nav-item {{ request()->routeIs('hrd.dashboard') ? 'active' : '' }}">
                                <a href="{{ route('hrd.dashboard') }}">
                                    <i class="fas fa-home"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Departemen</h4>
                            </li>
                            <li class="nav-item {{ request()->routeIs('hrd.department.index') ? 'active' : '' }}">
                                <a href="{{ route('hrd.department.index') }}">
                                    <i class="fas fa-building"></i>
                                    <p>Departemen</p>
                                </a>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Lowongan Pekerjaan</h4>
                            </li>
                            <li class="nav-item {{ request()->routeIs('hrd.lowongan.*') ? 'active submenu' : '' }}">
                                <a data-toggle="collapse" href="#lowongan" class="collapsed" aria-expanded="{{ request()->routeIs('hrd.lowongan.*') ? 'true' : 'false' }}">
                                    <i class="fas fa-briefcase"></i>
                                    <p>Daftar Lowongan</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse {{ request()->routeIs('hrd.lowongan.*') ? 'show' : '' }}" id="lowongan">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="{{ route('lowongan.aktif') }}">
                                                <span class="sub-item">Lowongan Aktif</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('hrd.lowongan.berakhir') }}">
                                                <span class="sub-item {{ request()->routeIs('hrd.lowongan.berakhir') ? 'font-weight-bold text-dark' : '' }}">Lowongan Berakhir</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Bobot Penilaian</h4>
                            </li>
                            <li class="nav-item {{ request()->routeIs('hrd.bobot-kriteria') ? 'active' : '' }}">
                                <a href="{{ route('hrd.bobot-kriteria') }}">
                                    <i class="fas fa-balance-scale"></i>
                                    <p>Bobot Kriteria</p>
                                </a>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Pelamar Kerja</h4>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#pelamar" class="collapsed" aria-expanded="false">
                                    <i class="fas fa-user-tie"></i>
                                    <p>Daftar Pelamar</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="pelamar">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="../demo1/index.html">
                                                <span class="sub-item">Pelamar Diterima</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../demo2/index.html">
                                                <span class="sub-item">Pelamar Ditolak</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Laporan Pelamar</h4>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#laporan" class="collapsed" aria-expanded="false">
                                    <i class="fas fa-print"></i>
                                    <p>Laporan Pelamar</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="laporan">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="../demo1/index.html">
                                                <span class="sub-item">Pelamar Diterima</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../demo2/index.html">
                                                <span class="sub-item">Pelamar Ditolak</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @break

                        @case('manajer')
                        @break

                        @default
                    @endswitch
                @endauth
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
