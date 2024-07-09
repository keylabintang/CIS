<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/admin" class="app-brand-link">
            <img src="{{ asset('assets_admin/img/logo/cis.png') }}" class="logo" alt="logo" />
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('member/dashboard*') ? 'active' : '' }}">
            <a href="/member" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <!-- Main -->

        <!-- Profil -->
        <li class="menu-item {{ Request::is('member/profil') ? 'active' : '' }}">
                    <a href="/member/profil" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-graduation"></i>
                        <div data-i18n="Daftar">Profil</div>
                    </a>
                </li>

        <!-- Jadwal -->
        <li class="menu-item {{ Request::is('member/Jadwal') ? 'active' : '' }}">
                    <a href="/member/jadwal" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-box"></i>
                    <div data-i18n="Daftar">Jadwal</div>
                    </a>
                </li>

        <!-- Program -->
        <li class="menu-item {{ Request::is('member/program') ? 'active' : '' }}">
                    <a href="/member/program" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-box"></i>
                    <div data-i18n="Daftar">Program Klub</div>
                    </a>
                </li>

        <!-- Event -->
        <li class="menu-item {{ Request::is('member/event') ? 'active' : '' }}">
                    <a href="/member/event" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-box"></i>
                    <div data-i18n="Daftar">Event</div>
                    </a>
                </li>

        <!-- Laporan -->
        <li class="menu-item {{ Request::is('member/laporan') ? 'active' : '' }}">
                    <a href="/member/laporan" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-box"></i>
                    <div data-i18n="Daftar">Laporan</div>
                    </a>
                </li>

        <!-- Pembayaran -->
        <li class="menu-item {{ Request::is('member/pembayaran') ? 'active' : '' }}">
                    <a href="/member/pembayaran" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-box"></i>
                    <div data-i18n="Daftar">Pembayaran</div>
                    </a>
                </li>

        

    </ul>
</aside>
<i class="menu-icon tf-icons bx bx-box"></i>

