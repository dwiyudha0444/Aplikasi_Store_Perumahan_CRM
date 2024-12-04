@include('dashboard.head')
@include('dashboard.sidebar')
@include('dashboard.navbar')

<div id="wrapper">
	<div class="main-content">
		<!-- /.row -->
        @yield('content')
		<footer class="footer">
			<ul class="list-inline">
				<li>2016 © NinjaAdmin.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div>