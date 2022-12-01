<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-center">
            <div class="logo">
                <a><img src="{{ asset('assetsm/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
            </div>
        </div>
    </div>
    <nav class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Pengguna :</li>
            <li class="sidebar-item">
                <a class='sidebar-link'>
                    <i class="bi bi-globe2"></i>
                    <span>{{ Auth::user()->name }}</span>
                </a>
            </li>

            <li class="sidebar-title">Main Menu</li>
            <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard" class="sidebar-link">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('galeri') ? 'active' : '' }}">
                <a href="{{ url('/galeri') }}" class="sidebar-link">
                    <i class="bi bi-image-fill"></i>
                    <span>Galeri Sekolah</span>
                </a>
            </li>

            @can('guru')
                <li class="sidebar-item {{ Request::is('guru/nilai*') ? 'active' : '' }}">
                    <a href="{{ route('nilai.index') }}" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Penilaian Raport</span>
                    </a>
                </li>
            @endcan

            @can('admin')
                <li class="sidebar-title">Admin Master</li>

                <li class="sidebar-item {{ Request::is('admin/kelas*') ? 'active' : '' }}">
                    <a href="{{ route('kelas.index') }}" class="sidebar-link">
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Data Kelas</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('admin/guru*') ? 'active' : '' }}">
                    <a href="{{ route('guru.index') }}" class="sidebar-link">
                        <i class="bi bi-file-earmark-text-fill"></i>
                        <span>Data Guru</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('admin/siswa*') ? 'active' : '' }}">
                    <a href="{{ route('siswa.index') }}" class="sidebar-link">
                        <i class="bi bi-file-earmark-ruled-fill"></i>
                        <span>Data Siswa</span>
                    </a>
                </li>
            @endcan

            <li class="sidebar-title">Aktifitas</li>
            <li class="sidebar-item  ">
                <a class="sidebar-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
					document.getElementById('logout-form').submit();"
                    title="keluar">
                    <i class="bi bi-door-open-fill"></i>
                    <span>Keluar</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
