<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Penilaian Akademik Nilai Siswa</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link">Utama</a>
            <a href="#nilai" class="nav-item nav-link">Raport Nilai</a>
            <a href="#about" class="nav-item nav-link">Tentang</a>

            @auth
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown">Hi,{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="/home" class="dropdown-item">Utama</a>
                        <a href="/dashboard" class="dropdown-item">Dashboard</a>
                        <hr>
                        <a class="dropdown-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="bi bi-door-open-fill"></i> Keluar
                                </button>
                            </form>
                        </a>
                    </div>
                </div>
            @else
                <a href="{{ url('/login') }}" class="nav-item nav-link" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Masuk"><i class="bi bi-door-open-fill"></i></a>
            @endauth

        </div>
    </div>
</nav>
