<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="">
                <img src="{{ asset('assets/images/brand/logo-white.png') }}" class="header-brand-img desktop-logo"
                    alt="logo">
                <img src="{{ asset('assets/images/brand/icon-white.png') }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset('assets/images/brand/icon-dark.png') }}" class="header-brand-img light-logo"
                    alt="logo">
                <img src="{{ asset('assets/images/brand/logo-dark.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">


                @if (auth()->user()->role == 'admin-kota')
                    <li class="sub-category">
                        <h3>Home</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item " data-bs-toggle="slide" href="javascript:void(0)"><i
                                class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Home</span><i
                                class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side1">
                                            <ul class="sidemenu-list">
                                                <li class="side-menu-label1"><a href="javascript:void(0)">Home</a></li>
                                                <li><a href="{{ route('dashboardAdminKota') }}"
                                                        class="slide-item">Dashboard</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-category">
                        <h3>User</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item " data-bs-toggle="slide" href="javascript:void(0)"><i
                                class="side-menu__icon fe fe-user"></i><span class="side-menu__label">User</span><i
                                class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side1">
                                            <ul class="sidemenu-list">
                                                <li class="side-menu-label1"><a href="javascript:void(0)">User</a></li>
                                                <li><a href="{{ route('userManagements') }}" class="slide-item">Data
                                                        User</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-category">
                        <h3>Database</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item " data-bs-toggle="slide" href="javascript:void(0)"><i
                                class="side-menu__icon fe fe-database"></i><span
                                class="side-menu__label">Database</span><i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side1">
                                            <ul class="sidemenu-list">
                                                <li class="side-menu-label1"><a href="javascript:void(0)">Database</a>
                                                </li>
                                                <li><a href="{{ route('databasePenduduk') }}" class="slide-item ">Data
                                                        Penduduk</a></li>
                                                <li><a href="{{ route('databaseTabulasi') }}"
                                                        class="slide-item ">Tabulasi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif

                @if (auth()->user()->role == 'admin-kecamatan')
                    <li class="sub-category">
                        <h3>Home</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item " data-bs-toggle="slide" href="javascript:void(0)"><i
                                class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Home</span><i
                                class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side1">
                                            <ul class="sidemenu-list">
                                                <li class="side-menu-label1"><a href="javascript:void(0)">Home</a>
                                                </li>
                                                <li><a href="" class="slide-item ">Dashboard</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif

                @if (auth()->user()->role == 'admin-kelurahan')
                    <li class="sub-category">
                        <h3>Home</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item " data-bs-toggle="slide" href="javascript:void(0)"><i
                                class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Home</span><i
                                class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side1">
                                            <ul class="sidemenu-list">
                                                <li class="side-menu-label1"><a href="javascript:void(0)">Home</a>
                                                </li>
                                                <li><a href="" class="slide-item ">Dashboard</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif

                @if (auth()->user()->role == 'admin-kader')
                    <li class="sub-category">
                        <h3>Home</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item " data-bs-toggle="slide" href="javascript:void(0)"><i
                                class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Home</span><i
                                class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li class="panel sidetab-menu">
                                <div class="tab-menu-heading p-0 pb-2 border-0">
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side1">
                                            <ul class="sidemenu-list">
                                                <li class="side-menu-label1"><a href="javascript:void(0)">Home</a>
                                                </li>
                                                <li><a href="{{ route('dashboardAdminKader') }}" class="slide-item ">Dashboard</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
<!--/APP-SIDEBAR-->
