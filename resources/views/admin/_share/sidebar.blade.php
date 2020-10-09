<nav id="sidebar">
    <div class="sidebar-header">
        <div class="pull-left image">
            {{-- <img src="{{ asset('images/'.Auth::user()->images) }}" class="img-circle" alt="User Image"> --}}
            <img src="Dashboard/images/user.jpg" class="img-circle" alt="User Image">
        </div>

        <div class="pull-left info">
            {{-- <p>{{ Auth::user()->name }}</p> --}}
            <p>minmidi</p>
            <a href="#"><i class="fa fa-circle text-success fa-xs"></i> Online</a>
        </div>
    </div>

    <ul class="list-unstyled components">
        <li class="@yield('active_1')">
            <a href="#"><i class="fas fa-tachometer-alt"></i> Trang chủ</a>
        </li>

        <li class="@yield('active_3')">
            <a href="#categoriesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-chart-pie"></i> Danh mục</a>
            <ul class="collapse list-unstyled" id="categoriesSubmenu">
                <li>
                    <a href="#"><i class="fas fa-list"></i> Danh mục sản phẩm</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-plus-circle"></i> Thêm danh mục</a>
                </li>
            </ul>
        </li>

        <li class="@yield('active_2')">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-mobile-alt"></i> Sản phẩm</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#"><i class="fas fa-list"></i> Danh sách sản phẩm</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-plus-circle"></i> Thêm sản phẩm</a>
                </li>
            </ul>
        </li>

        <li class="@yield('active_5')">
            <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-cog"></i> Tài khoản</a>
            <ul class="collapse list-unstyled" id="userSubmenu">
                <li>
                    <a href="#"><i class="fas fa-list"></i> Danh sách tài khoản</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-plus-circle"></i> Thêm tài khoản</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
            >
                <i class="fas fa-sign-out-alt"></i> Đăng xuất
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
