<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/user" class="app-brand-link">
            <img src="{{ asset('assets_admin/img/logo/logo.png') }}" class="logo" alt="logo" />
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('user/dashboard*') ? 'active' : '' }}">
            <a href="/user" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Absensi -->
        <li class="menu-item {{ Request::is('user/absensi*') ? 'active' : '' }}">
            <a href="/user/absensi" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Absensi">Absensi</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase"><span class="menu-header-text">Main</span></li>

        <!-- Jadwal -->
        <li class="menu-item {{ Request::is('user/absensi*') ? 'active' : '' }}">
            <a href="/user/absensi" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Absensi">Absensi</div>
            </a>
        </li>

        <!-- Program -->
        <li class="menu-item {{ Request::is('user/program*') ? 'active' : '' }}">
            <a href="/user/program" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Program">Program</div>
            </a>
        </li>

        <!-- Event -->
        <li class="menu-item {{ Request::is('user/event*') ? 'active' : '' }}">
            <a href="/user/event" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Event">Event</div>
            </a>
        </li>

        <!-- Laporan -->
        <li class="menu-item {{ Request::is('user/laporan*') ? 'active' : '' }}">
            <a href="/user/laporan" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Laporan">Laporan</div>
            </a>
        </li>

        <!-- SPP -->
        <li class="menu-item {{ Request::is('user/biaya*') ? 'active' : '' }}">
            <a href="/user/biaya" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Biaya Bulanan">Biaya Bulanan</div>
            </a>
        </li>

        
    </ul>
</aside>
