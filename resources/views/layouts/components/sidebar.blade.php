<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a class="brand-link">
			<img src="https://smpn9baubau.com//assets/dist/img/AdminLTELogo.png" class="brand-image img-circle elevation-4" style="opacity: .8">
			<span class="brand-text font-weight-light">Pans | Admin</span>
		</a>

		<!-- Sidebar -->
	<div class="sidebar">
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
				  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReF-weHUa-1_yNa2-graI2-2Iplv6nCNZoKN_xEd90yr46JrzJ2S4GdRGU-vVbvqqWdEs&usqp=CAU" class="img-circle elevation-2" alt="User Image">
				</div>
		
				<div class="info">
					<a class="d-block">{{ Auth::user()->name }}</a>
				</div>
			</div>

			<!-- SidebarSearch Form -->
			<div class="form-inline">
				<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
					<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
				</div>
			</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item menu-open">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-user"></i>
						<p>
						Master Data
						<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('guru.index') }}" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>Data Guru</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="{{ route('kelas.index') }}" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>Data Kelas</p>
							</a>
						</li>
						
						<li class="nav-item">
							<a href="{{ route('siswa.index') }}" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>Data Siswa</p>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</aside>