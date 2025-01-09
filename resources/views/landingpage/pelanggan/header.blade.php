<header class="nk-header bg-light has-overlay" id="home">
    <div class="overlay shape shape-a"></div><!-- Overlay Shape -->
    <div class="nk-navbar is-light is-sticky" id="navbar">
        <div class="container">
            <div class="nk-navbar-wrap">
                <div class="nk-navbar-logo logo">
                    <h1 class="logo-text">Siteplan</h1>
                </div><!-- .nk-navbar-logo -->
                <div class="nk-navbar-toggle d-lg-none">
                    <a href="#" class="toggle" data-menu-toggle="navbar-menu"><em
                            class="icon-menu icon ni ni-menu"></em><em class="icon-close icon ni ni-cross"></em></a>
                </div><!-- .nk-navbar-toggle -->
                <nav class="nk-navbar-menu" id="navbar-menu">
                    <ul class="nk-menu">
                        <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link" href="#home">Home</a></li>

                        @auth
                            <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                    href="{{ route('angsuran') }}">Angsuran</a></li>
                            <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                    href="{{ route('transaksi') }}">Transaksi</a></li>
                            <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                    href="{{ route('booking') }}">Booking</a></li>
                        @endauth

                        @guest
                            <li class="nk-menu-item">
                                <a class="scrollto nav-link nk-menu-link" href="#"
                                    onclick="alert('Silakan login terlebih dahulu untuk mengakses Transaksi!'); return false;">Transaksi</a>
                            </li>
                            <li class="nk-menu-item">
                                <a class="scrollto nav-link nk-menu-link" href="#"
                                    onclick="alert('Silakan login terlebih dahulu untuk mengakses Booking!'); return false;">Booking</a>
                            </li>
                        @endguest
                    </ul>

                    <ul class="nk-menu-btns">
                        <li class="nk-menu-item dropdown">
                            @if (Auth::check())
                                <a href="#" class="btn btn-sm scrollto nav-link dropdown-toggle" id="userDropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-sm scrollto nav-link">Login</a>
                            @endif

                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                    <!-- Form Logout -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

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
                            <p> was first reported in Wuhan, Hubei,
                                China in December 2019, the outbreak was later recognized as a
                                pandemic by the World Health Organization (WHO) on 11 March 2020.</p>


                        </div><!-- .content -->
                    </div><!-- .nk-banner-block -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nk-banner -->
</header><!-- .nk-header -->
<style>
    .nk-banner {
        background-image: none !important;
        background-color: #f5f5f5;
    }
</style>
