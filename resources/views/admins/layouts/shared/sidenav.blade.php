<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ route('admins.dashboard') }}">
                    主控台
                </a>
                <a class="nav-link" href="{{ route('admins.users.index') }}">
                    用戶管理
                </a>
                <a class="nav-link" href="{{ route('admins.products.index') }}">
                    商品管理
                </a>
                <a class="nav-link" href="{{ route('admins.posts.index') }}">
                    公告管理
                </a>
                <a class="nav-link" href="{{ route('admins.admins.index') }}">
                    管理員管理
                </a>
            </div>
        </div>
    </nav>
</div>