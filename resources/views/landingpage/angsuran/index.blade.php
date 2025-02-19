<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Site Title  -->
    <title>Siteplan</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/bundle.css?ver=112') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/styles.css?ver=112') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body class="nk-body">
    <style>
        .nk-page-head {
            background-image: none !important;
            background-color: #f5f5f5;
        }
    </style>
    <div class="nk-wrap">
        <header class="nk-header bg-light has-overlay" id="home">
            <div class="overlay shape shape-a-sm"></div><!-- Overlay Shape -->
            <div class="nk-navbar is-light is-sticky" id="navbar">
                <div class="container">
                    <div class="nk-navbar-wrap">
                        <div class="nk-navbar-logo logo">
                            <h1 class="logo-text">Siteplan</h1>
                        </div><!-- .nk-navbar-logo -->
                        <div class="nk-navbar-toggle d-lg-none">
                            <a href="#" class="toggle" data-menu-toggle="navbar-menu"><em
                                    class="icon-menu icon ni ni-menu"></em><em
                                    class="icon-close icon ni ni-cross"></em></a>
                        </div><!-- .nk-navbar-toggle -->
                        <nav class="nk-navbar-menu" id="navbar-menu">
                            <ul class="nk-menu">
                                <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                        href="{{ route('landingpage_pelanggan') }}">Home</a></li>
                                <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                        href="{{ route('angsuran') }}">Angsuran</a></li>
                                <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                        href="{{ route('transaksi') }}">Transaksi</a></li>
                                <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                        href="{{ route('booking') }}">Booking</a></li>

                            </ul>
                            <ul class="nk-menu-btns">
                                <li class="nk-menu-item dropdown">
                                    @if (Auth::check())
                                        <a href="#" class="btn btn-sm scrollto nav-link dropdown-toggle"
                                            id="userDropdown" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
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
                        </nav><!-- .nk-navbar-menu -->
                    </div><!-- .nk-navbar-wrap -->
                </div><!-- .container -->
            </div><!-- .nk-navbar -->
            <div class="nk-page-head">
                <div class="container">
                    <div class="nk-page-head-wrap">
                        <div class="nk-page-head-text">
                            <h5 class="subtitle">Laporan Angsuran</h5>
                            <h2 class="title">Daftar List Angsuran</h2>
                        </div><!-- .nk-banner-block -->
                        <div class="nk-page-head-image">
                            <img src="images/gfx/page-head.png" alt="">
                        </div>
                    </div>
                </div><!-- .container -->
            </div><!-- .nk-banner -->
        </header><!-- .nk-header -->

        <main class="nk-pages">
            <section class="section">
                <div class="container">
                    <h2 class="section-title">Data</h2>
                    <div class="table-responsive">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Pembayaran</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Tenor Angsuran</th>
                                    <th>Cicilan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($angsuran as $index => $use)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $use->id_pembayaran ?? 'Belum diisi' }}</td>
                                        <td>{{ $use->nama_pelanggan ?? 'Belum diisi' }}</td>
                                        <td>{{ $use->tenor_angsuran ?? 'Belum diisi' }}</td>
                                        <td>{{ $use->cicilan ?? 'Belum diisi' }}</td>
                                        <td>
                                            <a href="{{ route('edit_angsuran', $use->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('download_pdf', $use->id) }}"
                                                class="btn btn-success btn-sm">Download PDF</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </section>
        </main>

        <footer class="nk-footer bg-dark tc-light has-overlay">
            <div class="overlay shape shape-c"></div><!-- Overlay Shape -->
            <section class="section section-footer section-m tc-light">
                <div class="container">
                    <div class="nk-footer-bottom">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <p class="nk-copyright">&copy;Template Made by <a
                                        href="https://softnio.com">Softnio</a>.</p>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <ul class="nk-footer-links justify-content-md-end">
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div><!-- .col -->
                        </div><!-- .row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="nk-dislaimer">
                                    <p>Disclaimer: We hope you find the information presented on this website useful.
                                        This website is for general information and raise awareness of (2019-nCoV) only.
                                        <br class="d-none d-lg-block">
                                        All the information based on WHO, NHS and CDC website. Information on our
                                        website is meant for awareness, if you have any doubt please verify from
                                        respective site.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-footer-bottom -->
                </div><!-- .container -->
            </section><!-- .section -->
        </footer><!-- .nk-footer -->
    </div><!-- .nk-wrap -->

    <!-- JavaScript -->
    <script src="{{ asset('landingpage/assets/js/bundle.js?ver=112') }}"></script>
    <script src="{{ asset('landingpage/assets/js/scripts.js?ver=112') }}"></script>
</body>

</html>
