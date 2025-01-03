<header class="nk-header bg-light has-overlay" id="home">
            <div class="overlay shape shape-a"></div><!-- Overlay Shape -->
            <div class="nk-navbar is-light is-sticky" id="navbar">
                <div class="container">
                    <div class="nk-navbar-wrap">
                        <div class="nk-navbar-logo logo">
                            <a href="./" class="logo-link">
                                <img class="logo-dark" src="{{ asset('landingpage/images/logo-dark.png') }}"
                                    srcset="{{ asset('landingpage/images/logo-dark2x.png 2x') }}" alt="logo">
                                <img class="logo-light" src="{{ asset('landingpage/images/logo-white.png') }}"
                                    srcset="{{ asset('landingpage/images/logo-white2x.png 2x') }}" alt="logo">
                            </a>
                        </div><!-- .nk-navbar-logo -->
                        <div class="nk-navbar-toggle d-lg-none">
                            <a href="#" class="toggle" data-menu-toggle="navbar-menu"><em
                                    class="icon-menu icon ni ni-menu"></em><em
                                    class="icon-close icon ni ni-cross"></em></a>
                        </div><!-- .nk-navbar-toggle -->
                        <nav class="nk-navbar-menu" id="navbar-menu">
                            <ul class="nk-menu">
                                <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                        href="#home">Home</a></li>
                                <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                        href="{{ route('transaksi') }}">Transaksi</a></li>
                                <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                        href="{{ route('booking') }}">Booking</a></li>
                                
                            </ul>
                            <ul class="nk-menu-btns">
                                <li class="nk-menu-item"><a href=""
                                        class="btn btn-sm scrollto nav-link">{{ Auth::user()->name }}</a></li>
                            </ul>
                        </nav><!-- .nk-navbar-menu -->
                    </div><!-- .nk-navbar-wrap -->
                </div><!-- .container -->
            </div><!-- .nk-navbar -->
            <div class="nk-banner">
                <div class="container">
                    <div class="row g-gs align-items-center justify-content-between">
                        <div class="col-lg-5 order-lg-last">
                            <div class="nk-banner-image">
                                {{-- <img src="{{ asset('landingpage/images/gfx/header-a.png') }}" alt=""> --}}
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="nk-banner-block">
                                <div class="content">
                                    <h1 class="heading">
                                        <span>Perumahan</span>
                                        <span class="heading-sm">
                                            <span class="sup">Siteplan</span>
                                            <span class="sub">New</span>
                                        </span>
                                    </h1>
                                    <p>The Coronavirus (COVID-19) was first reported in Wuhan, Hubei,
                                        China in December 2019, the outbreak was later recognized as a
                                        pandemic by the World Health Organization (WHO) on 11 March 2020.</p>

                                    {{-- <ul class="nk-banner-btns">
                                        <li><a href="#protect" class="btn scrollto"><span>How to Protect</span><em
                                                    class="icon ni ni-shield-half"></em></a></li>
                                        <li><a href="#about" class="btn btn-transparent scrollto"><span>About
                                                    COVID-19</span><em class="icon ni ni-arrow-right"></em></a></li>
                                    </ul>
                                    <div class="status" data-covid="world">
                                        <div class="row g-gs">
                                            <div class="col-sm-4 col-6">
                                                <div class="status-item">
                                                    <h6 class="title">Worldwide Cases</h6>
                                                    <div class="h3 count covid-stats-cases">~</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="status-item">
                                                    <h6 class="title">Deaths</h6>
                                                    <div class="h3 count covid-stats-death">~</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="status-item">
                                                    <h6 class="title">Recovered</h6>
                                                    <div class="h3 count covid-stats-recovered">~</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="status-note">* Last updated: <span
                                                class="covid-update-time">~</span></div>
                                    </div><!-- .status --> --}}
                                </div><!-- .content -->
                            </div><!-- .nk-banner-block -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .nk-banner -->
        </header><!-- .nk-header -->