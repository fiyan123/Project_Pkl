<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>

    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
		<li class="nav-item">
			<a class="nav-link" data-widget="navbar-search" href="#" role="button">
				<i class="fas fa-search"></i>
			</a>
			<div class="navbar-search-block">
				<form class="form-inline" action="/admin/siswa" method="GET">
					<div class="input-group input-group-sm">
					<input type="text" class="form-control form-control-navbar" type="search" name="search" value="{{ request('search') }}" placeholder="Search">
						<div class="input-group-append">
							<button class="btn btn-navbar" type="submit">
								<i class="fas fa-search"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</li>
		
		<li class="nav-item">
			<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();" role="button" style="color: black" title="keluar"> 
				<i class="bi bi-door-closed-fill"></i>
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
		</li>
    </ul>
</nav>
