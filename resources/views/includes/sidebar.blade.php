<!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ url('adminlte/dist/img/perpus.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PERPUSTAKAAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Putri</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                         <li class="nav-item menu-open">
                            <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active':''}}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/buku') }}" class="nav-link {{ Request::is('buku') ? 'active':''}}">
                              <i class="fas fa-fw fa-book"></i>
                              <p>Buku</p>
                          </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('/penulis') }}" class="nav-link {{ Request::is('penulis') ? 'active':''}}">
                          <i class="fas fa-fw fa-pencil"></i>
                          <p>Penulis</p>
                      </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/penerbit') }}" class="nav-link {{ Request::is('penerbit') ? 'active':''}}">
                      <i class="fas fa-fw fa-building"></i>
                      <p>Penerbit</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/kategori') }}" class="nav-link {{ Request::is('kategori') ? 'active':''}}">
                  <i class="fas fa-fw fa-tags"></i>
                  <p>Kategori</p>
              </a>
          </li>
           <li class="nav-item">
                <a href="{{ url('/peminjaman') }}" class="nav-link {{ Request::is('peminjaman') ? 'active':''}}">
                  <i class="fas fa-fw fa-hand-holding-dollar"></i>
                  <p>Peminjaman</p>
              </a>
          </li>
          <li class="nav-item">
                <a href="{{ url('/actionlogout') }}" class="nav-link {{ Request::is('logout') ? 'active':''}}">
                  <i class="fas fa-fw fa-arrow-left"></i>
                  <p>Logout</p>
              </a>
          </li>
          
      </ul>
  </nav>
</div>
</aside>