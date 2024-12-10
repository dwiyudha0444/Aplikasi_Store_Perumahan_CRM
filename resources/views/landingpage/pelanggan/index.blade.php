@include('landingpage.pelanggan.head')

<body class="nk-body">

    <div class="nk-wrap">
        @include('landingpage.pelanggan.header')

        <main class="nk-pages">

            @yield('content2')

        </main><!-- .nk-pages -->

        @include('landingpage.pelanggan.footer')
    </div><!-- .nk-wrap -->

    <!-- JavaScript -->
    <script src="{{ asset('landingpage/assets/js/bundle.js?ver=112') }}"></script>
    <script src="{{ asset('landingpage/assets/js/scripts.js?ver=112') }}"></script>
</body>

</html>
