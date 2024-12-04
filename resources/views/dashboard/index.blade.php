@include('dashboard.head')
@include('dashboard.sidebar')
@include('dashboard.navbar')

<div id="wrapper">
	<div class="main-content">
		<!-- /.row -->
        @yield('content')
		@include('dashboard.footer')
	</div>
	<!-- /.main-content -->
</div>

@include('dashboard.js')