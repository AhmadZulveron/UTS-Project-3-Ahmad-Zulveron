<div class="horizontal-menu">
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="/">
                    {{-- <img src="/images/logo.jpg" alt="logo" /> --}}
                    <h1>SIAK</h1>
                    <span class="font-12 d-block font-weight-light">SMA Negeri 5 Sijunjung </span>
                </a>
                <a class="navbar-brand brand-logo-mini" href="/"><img src="/images/logo.jpg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search"
                                aria-label="search" aria-describedby="search" />
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    @if (!session('email'))
                        <div class="nav-item nav-profile-text">
                            <a class="btn btn-primary" href="/login">Sign In</a>
                        </div>
                    @else
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown"
                                aria-expanded="false">
                                <div class="nav-profile-img">
                                    <img src="/images/pfp.png" alt="image" />
                                </div>

                                <div class="nav-profile-text">

                                    <p class="text-black font-weight-semibold m-0"> {{ Auth::user()->username }} </p>
                                    <span class="font-13 online-color text-success">online <i
                                            class="mdi mdi-chevron-down"></i></span>
                                </div>

                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                                <div class="dropdown-divider"></div>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item" onclick="return confirm('Yakin ingin keluar')">
                                        <i class="mdi mdi-logout mr-2 text-primary"></i> Keluar
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="horizontal-menu-toggle">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </div>
    </nav>
    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="mdi mdi-compass-outline menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-monitor-dashboard menu-icon"></i>
                        <span class="menu-title">Forms</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item">
                                <a class="nav-link" href="/pendaftarans">Pendaftaran Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/gurus">Guru</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/nilais">Nilai</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/users">User</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/matapelajarans">
                        <i class="mdi mdi-clipboard-text menu-icon"></i>
                        <span class="menu-title">Mata Pelajaran</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/siswas">
                        <i class="mdi mdi-contacts menu-icon"></i>
                        <span class="menu-title">Siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/jurusans">
                        <i class="mdi mdi-chart-bar menu-icon"></i>
                        <span class="menu-title">Jurusan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/jadwalpelajarans">
                        <i class="mdi mdi-table-large menu-icon"></i>
                        <span class="menu-title">Jadwal Pelajaran</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelas" class="nav-link" {{-- target="_blank" --}}>
                        <i class="mdi mdi-file-document-box menu-icon"></i>
                        <span class="menu-title">Kelas</span></a>
                </li>
                <li class="nav-item">
                    <div class="nav-link d-flex">
                        <button class="btn btn-sm bg-danger text-white"> Trailing </button>
                        <div class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle text-white font-weight-semibold"
                                id="notificationDropdown" href="#" data-toggle="dropdown"> English </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="flag-icon flag-icon-bl mr-3"></i> French </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="flag-icon flag-icon-cn mr-3"></i> Chinese </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="flag-icon flag-icon-de mr-3"></i> German </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="flag-icon flag-icon-ru mr-3"></i>Russian </a>
                            </div>
                        </div>
                        <a class="text-white" href="/"><i class="mdi mdi-home-circle"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
