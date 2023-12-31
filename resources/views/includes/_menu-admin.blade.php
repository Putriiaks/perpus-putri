<!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->username }}</a>
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active':''}}">
              <i class="fas fa-fw fas fa-tachometer-alt" aria-hidden="true"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/buku') }}" class="nav-link {{ Request::is('buku') ? 'active':''}}">
              <i class="fas fa-fw fa-book"></i>
              <p>
                Data Buku
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('penulis_index') }}" class="nav-link {{ Request::is('penulis') ? 'active':''}}">
              <i class="fas fa-fw fa-pencil-alt"></i>
              <p>
                Penulis
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('penerbit_index') }}" class="nav-link {{ Request::is('penerbit') ? 'active':''}}">
              <i class="fas fa-fw fa-building"></i>
              <p>
                  Penerbit
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('kategori_index') }}" class="nav-link {{ Request::is('kategori') ? 'active':''}}">
              <i class="fas fa-fw fa-tags"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
            
          <li class="nav-item">
            <a href="{{ route('peminjaman_index') }}" class="nav-link {{ Request::is('peminjaman') ? 'active':''}}">
              <i class="fas fa-fw fa-hand-holding-dollar"></i>
              <p>
                Peminjaman
              </p>
            </a>
          </li>
            

          <li class="nav-header">SISTEM</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-fw fa-solid fa-users"></i>
              <p>
                User
                <i class="fas fa-fw fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="{{ route('semua_index') }}" class="nav-link">
                  <i class="fas fa-fw fa-solid fa-list"></i>
                  <p>Semua</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin_index') }}" class="nav-link">
                  <i class="fas fa-fw fa-regular fa-keyboard"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('anggota_index') }}" class="nav-link">
                  <i class="fas fa-fw fa-solid fa-user"></i>  
                  <p>Anggota</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="fas fa-fw fa-solid fa-lock"></i>
              <p>
                Ganti Password
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/login')}}" class="nav-link">
              <i class="fas fa-fw fa-solid fa-lock"></i>
              <p>
                Login
              </p>
            </a>
          </li>
          <li class="nav-item"> 
        <a href="{{ url('/actionlogout') }}" class="nav-link"> 
          <i class="fas fa-fw fa-right-from-bracket"></i> 
          <p>Logout</p> 
      </a> 
  </li>

          
      </nav>
    </div>