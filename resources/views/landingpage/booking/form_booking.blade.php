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
</head>

<body class="nk-body">

    <div class="nk-wrap">
        <header class="nk-header bg-light has-overlay" id="home">
            <div class="overlay shape shape-a-sm"></div><!-- Overlay Shape -->
            <div class="nk-navbar is-light is-sticky" id="navbar">
                <div class="container">
                    <div class="nk-navbar-wrap">
                        <div class="nk-navbar-logo logo">
                            <a href="./" class="logo-link">
                                <img class="logo-dark" src="images/logo-dark.png" srcset="images/logo-dark2x.png 2x"
                                    alt="logo">
                                <img class="logo-light" src="images/logo-white.png" srcset="images/logo-white2x.png 2x"
                                    alt="logo">
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
                                        href="{{route('landingpage_pelanggan')}}">Home</a></li>
                                <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                        href="{{ route('transaksi') }}">Transaksi</a></li>
                                <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                        href="{{ route('booking') }}">Booking</a></li>
                                
                            </ul>
                            <ul class="nk-menu-btns">
                                <li class="nk-menu-item"><a href="#" class="btn btn-sm scrollto nav-link">Do &amp;
                                        Don’t</a></li>
                            </ul>
                        </nav><!-- .nk-navbar-menu -->
                    </div><!-- .nk-navbar-wrap -->
                </div><!-- .container -->
            </div><!-- .nk-navbar -->
            <div class="nk-page-head">
                <div class="container">
                    <div class="nk-page-head-wrap">
                        <div class="nk-page-head-text">
                            <h5 class="subtitle">Prevention</h5>
                            <h2 class="title">Daftar List Booking</h2>
                        </div><!-- .nk-banner-block -->
                        <div class="nk-page-head-image">
                            <img src="images/gfx/page-head.png" alt="">
                        </div>
                    </div>
                </div><!-- .container -->
            </div><!-- .nk-banner -->
        </header><!-- .nk-header -->

        <main class="nk-pages">
            <section id="form-section" class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4>Form Input Data</h4>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" id="nama" name="nama" class="form-control"
                                                placeholder="Masukkan Nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Masukkan Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea id="alamat" name="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" id="telepon" name="telepon" class="form-control"
                                                placeholder="Masukkan Nomor Telepon">
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>


        <footer class="nk-footer bg-dark tc-light has-overlay">
            <div class="overlay shape shape-c"></div><!-- Overlay Shape -->
            <section class="section section-footer section-m tc-light">
                <div class="container">
                    <div class="nk-footer-top">
                        <div class="row g-gs gy-m">
                            <div class="col-lg-3 col-md-9 mr-auto">
                                <div class="wgs wgs-about">
                                    <div class="wgs-logo logo">
                                        <a href="./" class="logo-link">
                                            <img src="images/logo-white.png" srcset="images/logo-white2x.png 2x"
                                                alt="logo">
                                        </a>
                                    </div>
                                    <div class="wgs-about-text">
                                        <p>This website is for health information and advice about coronavirus
                                            (COVID-19), how to prevent and protect yourself from disease.</p>
                                        <p>Learn about the government response to coronavirus on GOV.UK.</p>
                                    </div>
                                    <ul class="wgs-social">
                                        <li><a href="#"><em class="icon ni ni-facebook-f"></em></a></li>
                                        <li><a href="#"><em class="icon ni ni-twitter"></em></a></li>
                                        <li><a href="#"><em class="icon ni ni-youtube-fill"></em></a></li>
                                    </ul>
                                </div><!-- .wgs -->
                            </div><!-- .col -->
                            <div class="col-sm-4 col-lg-2">
                                <div class="wgs wgs-menu">
                                    <h6 class="wgs-title">Quick Link</h6>
                                    <ul class="wgs-links">
                                        <li><a class="scrollto" href="#symptoms">Symptoms</a></li>
                                        <li><a class="scrollto" href="#prevention">Prevention</a></li>
                                        <li><a class="scrollto" href="#protect">Protect Youself</a></li>
                                        <li><a class="scrollto" href="#faq">FAQs</a></li>
                                        <li><a class="scrollto" href="#about">About Corona</a></li>
                                    </ul>
                                </div><!-- .wgs -->
                            </div><!-- .col -->
                            <div class="col-sm-4 col-lg-3">
                                <div class="wgs wgs-menu">
                                    <h6 class="wgs-title">Helpfull link</h6>
                                    <ul class="wgs-links">
                                        <li><a href="#">Healthcare Professionals</a></li>
                                        <li><a href="#">Healthcare Facilities</a></li>
                                        <li><a href="#">Older Adults & Medical Conditions</a></li>
                                        <li><a href="#">Repare your Family</a></li>
                                    </ul>
                                </div><!-- .wgs -->
                            </div><!-- .col -->
                            <div class="col-sm-4 col-lg-2">
                                <div class="wgs wgs-menu">
                                    <h6 class="wgs-title">Important Link</h6>
                                    <ul class="wgs-links">
                                        <li><a href="#">WHO Website</a></li>
                                        <li><a href="#">CDC Website</a></li>
                                        <li><a href="#">NHS Website</a></li>
                                        <li><a href="#">Harvard Health</a></li>
                                    </ul>
                                </div><!-- .wgs -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-footer-top -->
                    <div class="nk-footer-bottom">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <p class="nk-copyright">&copy; 2020 KOVID-19. Template Made by <a
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
                                        respective site.</p>
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
