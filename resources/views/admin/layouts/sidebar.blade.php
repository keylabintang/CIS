<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/admin" class="app-brand-link">
            <img src="{{ asset('assets_admin/img/logo/cis-2.png') }}" class="logo" alt="logo" />
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
            <a href="/admin" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Pendaftaran -->
        <li class="menu-item {{ Request::is('admin/pendaftaran*') ? 'active' : '' }}">
            <a href="/admin/pendaftaran" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-plus"></i>
                <div data-i18n="Pendaftaran">Pendaftaran</div>
            </a>
        </li>

        <!-- Main -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Main</span></li>

        <!-- Member -->
        <li class="menu-item {{ Request::is('admin/member*') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Member">Member</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/member') ? 'active' : '' }}">
                    <a href="/admin/member" class="menu-link">
                        <div data-i18n="Daftar">Daftar</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/member/create') ? 'active' : '' }}">
                    <a href="{{ route('member.create') }}" class="menu-link">
                        <div data-i18n="Tambah">Tambah</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Jadwal -->
        <li class="menu-item {{ Request::is('admin/jadwal*') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Jadwal">Jadwal</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/jadwal') ? 'active' : '' }}">
                    <a href="/admin/jadwal" class="menu-link">
                        <div data-i18n="Daftar">Daftar</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/jadwal/create') ? 'active' : '' }}">
                    <a href="{{ route('jadwal.create') }}" class="menu-link">
                        <div data-i18n="Tambah">Tambah</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Program -->
        <li class="menu-item {{ Request::is('admin/program*') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-star"></i>
                <div data-i18n="Program">Program</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/program') ? 'active' : '' }}">
                    <a href="/admin/program" class="menu-link">
                        <div data-i18n="Daftar">Daftar</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/program/create') ? 'active' : '' }}">
                    <a href="{{ route('program.create') }}" class="menu-link">
                        <div data-i18n="Tambah">Tambah</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Event -->
        <li class="menu-item {{ Request::is('admin/event*') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-calendar-star"></i>
                <div data-i18n="Event">Event</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/event') ? 'active' : '' }}">
                    <a href="/admin/event" class="menu-link">
                        <div data-i18n="Daftar">Daftar</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/event/create') ? 'active' : '' }}">
                    <a href="{{ route('event.create') }}" class="menu-link">
                        <div data-i18n="Tambah">Tambah</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Laporan -->
        <li class="menu-item {{ Request::is('admin/laporan*') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-clipboard"></i>
                <div data-i18n="SPP">Laporan Bulanan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/laporan') ? 'active' : '' }}">
                    <a href="/admin/laporan" class="menu-link">
                        <div data-i18n="Daftar">Daftar</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/laporan/create') ? 'active' : '' }}">
                    <a href="{{ route('laporan.create') }}" class="menu-link">
                        <div data-i18n="Tambah">Tambah</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- SPP -->
        <li class="menu-item {{ Request::is('admin/biaya*') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-money"></i>
                <div data-i18n="SPP">Keuangan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/biaya') ? 'active' : '' }}">
                    <a href="/admin/biaya" class="menu-link">
                        <div data-i18n="Daftar">Daftar</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/biaya/create') ? 'active' : '' }}">
                    <a href="{{ route('biaya.create') }}" class="menu-link">
                        <div data-i18n="Tambah">Tambah</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Front -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Front</span></li>

        <!-- Prestasi -->
        <li class="menu-item {{ Request::is('admin/prestasi*') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-medal"></i>
                <div data-i18n="Prestasi">Prestasi</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/prestasi') ? 'active' : '' }}">
                    <a href="/admin/prestasi" class="menu-link">
                        <div data-i18n="Daftar">Daftar</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/prestasi/create') ? 'active' : '' }}">
                    <a href="{{ route('prestasi.create') }}" class="menu-link">
                        <div data-i18n="Tambah">Tambah</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Pelatih -->
        <li class="menu-item {{ Request::is('admin/pelatih*') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Pelatih">Pelatih</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/pelatih') ? 'active' : '' }}">
                    <a href="/admin/pelatih" class="menu-link">
                        <div data-i18n="Daftar">Daftar</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/pelatih/create') ? 'active' : '' }}">
                    <a href="{{ route('pelatih.create') }}" class="menu-link">
                        <div data-i18n="Tambah">Tambah</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Registrasi -->
        <li class="menu-item {{ Request::is('admin/registrasi*') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="user">User</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/registrasi') ? 'active' : '' }}">
                    <a href="/admin/registrasi" class="menu-link">
                        <div data-i18n="Daftar">Daftar</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
