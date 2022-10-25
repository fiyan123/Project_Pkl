<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a class="brand-link" href="/home">
			<img src="https://smpn9baubau.com//assets/dist/img/AdminLTELogo.png" class="brand-image img-circle elevation-4" style="opacity: .8">
			<span class="brand-text font-weight-light">Penilaian Siswa | Pans</span>
		</a>

	<!-- Sidebar -->
	<div class="sidebar">
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
				  <img src="https://toppng.com/uploads/preview/male-user-filled-icon-man-icon-115533970576b3erfsss1.png" class="img-circle elevation-2" alt="User Image">
				</div>

				<div class="info">
					<a class="d-block">{{ auth::user()->name }}</a>
				</div>
			</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-header">USER MAIN</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-users"></i>
								<p>
									User Guru
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-header">Data Guru</li>
							<li class="nav-item">
								<a href="{{ route('nilai.index') }}" class="nav-link {{ Request::is('guru/nilai*') ? 'active' : '' }}">
									<i class="nav-icon fas fa-book"></i>
									<p>Penilaian Raport</p>
								</a>
							</li>
						</ul>
					</li>

				{{-- User siswa --}}
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-graduation-cap"></i>
						<p>User Siswa
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-header">Data Raport Siswa</li>
						<li class="nav-item">
							<a href="{{ route('siswa_nilai.index') }}" class="nav-link {{ Request::is('siswa_nilai/index*') ? 'active' : '' }}">
								<i class="far fa-dot-circle nav-icon"></i>
								<p>Data Nilai</p>
							</a>
						</li>
					</ul>
				</li>
				
				{{-- Admin Master --}}
				@can('admin')
				<li class="nav-header mt-3">ADMIN MASTER</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-globe"></i>
							<p>
								Admin Data
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="{{ route('kelas.index') }}" class="nav-link {{ Request::is('admin/kelas*') ? 'active' : '' }}">
									<i class="nav-icon fas fa-edit"></i>
									<p>Data Kelas</p>
								</a>
							</li>
						<li class="nav-item">
							<a href="{{ route('guru.index') }}" class="nav-link {{ Request::is('admin/guru*') ? 'active' : '' }}">
								<i class="nav-icon fas fa-edit"></i>
								<p>Data Guru</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('siswa.index') }}" class="nav-link {{ Request::is('admin/siswa*') ? 'active' : '' }}">
								<i class="nav-icon fas fa-edit"></i>
								<p>Data Siswa</p>
							</a>
						</li>
					</ul>
				</li>
				@endcan
			</ul>
		</nav>
	</div>
</aside>