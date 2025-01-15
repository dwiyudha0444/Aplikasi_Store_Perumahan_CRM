<body>
    <div class="main-menu">
        <header class="header">
            <a href="index.html" class="logo"><i class="ico ti-rocket"></i>SpaceX</a>
            <button type="button" class="button-close fa fa-times js__menu_close"></button>
        </header>
        <!-- /.header -->
        <div class="content">

            <div class="navigation">
                @if (auth()->check() && auth()->user()->role === 'admin')
                    <h5 class="title">Navigation</h5>

                    <ul class="menu js__accordion">

                        <li class="current">
                            <a class="waves-effect" href="index.html">
                                <i class="menu-icon ti-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect" href="{{ route('denah_perum') }}">
                                <i class="menu-icon ti-calendar"></i><span>Denah Perumahan</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect parent-item js__control" href="#">
                                <i class="menu-icon ti-bar-chart"></i><span>Transaksi</span>
                                <span class="menu-arrow fa fa-angle-down"></span>
                            </a>
                            <ul class="sub-menu js__content">
                                <li><a href="{{ route('transaksi_admin')}}">Transaksi</a></li>
                                <li><a href="{{ route('pembayaran_admin')}}">Data Pembayaran</a></li>                         
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect parent-item js__control" href="#">
                                <i class="menu-icon ti-bar-chart"></i><span>Angsuran</span>
                                <span class="menu-arrow fa fa-angle-down"></span>
                            </a>
                            <ul class="sub-menu js__content">
                                <li><a href="{{ route('angsuran_admin')}}">Angsuran</a></li>
                               
                            </ul>
                        </li>
                    </ul>
                @endif


                @if (auth()->check() && auth()->user()->role === 'marketing')
                    <h5 class="title">Marketing</h5>
                    <!-- /.title -->
                    <ul class="menu js__accordion">
                        {{-- <li>
                            <a class="waves-effect parent-item js__control" href="#"><i
                                    class="menu-icon ti-flag"></i><span>Icons</span><span
                                    class="menu-arrow fa fa-angle-down"></span></a>
                            <ul class="sub-menu js__content">
                                <li><a href="icons-font-awesome-icons.html">Font Awesome</a></li>
                                <li><a href="icons-fontello.html">Fontello</a></li>
                                <li><a href="icons-material-icons.html">Material Design Icons</a></li>
                                <li><a href="icons-material-design-iconic.html">Material Design Iconic Font</a></li>
                                <li><a href="icons-themify-icons.html">Themify Icons</a></li>
                            </ul>
                            <!-- /.sub-menu js__content -->
                        </li> --}}
                        <li>
                            <a class="waves-effect parent-item js__control" href="#"><i
                                    class="menu-icon ti-desktop"></i><span>Promosi</span><span
                                    class="menu-arrow fa fa-angle-down"></span></a>
                            <ul class="sub-menu js__content">
                                <li><a href="{{ route('promosi_marketing') }}">Promosi</a></li>
                                <li><a href="{{ route('daftar_pelanggan_marketing') }}">Daftar Pelanggan</a></li>
                            </ul>
                            <!-- /.sub-menu js__content -->
                        {{-- </li>
                        <li>
                            <a class="waves-effect parent-item js__control" href="#"><i
                                    class="menu-icon ti-layout"></i><span>Promosi</span><span
                                    class="notice notice-blue">7</span></a>
                            <ul class="sub-menu js__content">
                                <li><a href="form-elements.html">General Elements</a></li>
                                <li><a href="form-advanced.html">Advanced Form</a></li>
                                <li><a href="form-fileupload.html">Form Uploads</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                <li><a href="form-xeditable.html">X-editable</a></li>
                            </ul>
                            <!-- /.sub-menu js__content -->
                        </li>
                        <li>
                            <a class="waves-effect parent-item js__control" href="#"><i
                                    class="menu-icon ti-layout-accordion-merged"></i><span>Tables</span><span
                                    class="menu-arrow fa fa-angle-down"></span></a>
                            <ul class="sub-menu js__content">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Tables</a></li>
                                <li><a href="tables-responsive.html">Responsive Tables</a></li>
                                <li><a href="tables-editable.html">Editable Tables</a></li>
                            </ul>
                            <!-- /.sub-menu js__content -->
                        </li> --}}
                    </ul>
                @endif
                {{-- <h5 class="title">Additions</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect" href="profile.html"><i class="menu-icon ti-user"></i><span>Profile</span></a>
				</li>
				<li>
					<a class="waves-effect" href="inbox.html"><i class="menu-icon ti-email"></i><span>Mail</span><span class="notice notice-danger">New</span></a>
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-layers"></i><span>Page</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="page-starter.html">Starter Page</a></li>
						<li><a href="page-login.html">Login</a></li>
						<li><a href="page-register.html">Register</a></li>
						<li><a href="page-recoverpw.html">Recover Password</a></li>
						<li><a href="page-lock-screen.html">Lock Screen</a></li>
						<li><a href="page-confirm-mail.html">Confirm Mail</a></li>
						<li><a href="page-404.html">Error 404</a></li>
						<li><a href="page-500.html">Error 500</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-blackboard"></i><span>Extra Pages</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="extras-contact.html">Contact list</a></li>
						<li><a href="extras-email-template.html">Email template</a></li>
						<li><a href="extras-faq.html">FAQ</a></li>
						<li><a href="extras-gallery.html">Gallery</a></li>
						<li><a href="extras-invoice.html">Invoice</a></li>
						<li><a href="extras-maps.html">Maps</a></li>
						<li><a href="extras-pricing.html">Pricing</a></li>
						<li><a href="extras-projects.html">Projects</a></li>
						<li><a href="extras-taskboard.html">Taskboard</a></li>
						<li><a href="extras-timeline.html">Timeline</a></li>
						<li><a href="extras-tour.html">Tour</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
			</ul> --}}

            </div>

        </div>
        <!-- /.content -->
    </div>
    <!-- /.main-menu -->
