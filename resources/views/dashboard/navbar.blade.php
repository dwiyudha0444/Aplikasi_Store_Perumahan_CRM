<div class="fixed-navbar">
    <div class="pull-left">

        <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title">
            Home
        </h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">
        <span class="user-login-name">{{ Auth::user()->name }}</span>
        <div class="ico-item">
            <i class="ti-user"></i>
            <ul class="sub-ico-item">
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                </li>
            </ul>
            <!-- /.sub-ico-item -->
        </div>
    </div>

    <!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->


<!-- /#notification-popup -->
