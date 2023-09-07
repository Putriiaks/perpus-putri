<!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ url('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                         <li class="nav-item menu-open">
                            <a href="{{ url('/home') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/buku') }}" class="nav-link">
                              <i class="fas fa-fw fa-book"></i>
                              <p>Buku</p>
                          </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('/penulis') }}" class="nav-link">
                          <i class="fas fa-fw fa-pencil"></i>
                          <p>Penulis</p>
                      </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/penerbit') }}" class="nav-link">
                      <i class="fas fa-fw fa-user"></i>
                      <p>Penerbit</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/kategori') }}" class="nav-link">
                  <i class="fas fa-fw fa-tags"></i>
                  <p>Kategori</p>
              </a>
          </li>
           <li class="nav-item">
                <a href="{{ url('/peminjaman') }}" class="nav-link">
                  <i class="fas fa-fw fa-hand-holding-dollar"></i>
                  <p>Peminjaman</p>
              </a>
          </li>
          <li class="nav-item">
                <a href="{{ url('/actionlogout') }}" class="nav-link">
                  <i class="fas fa-fw fa-arrow-left"></i>
                  <p>Logout</p>
              </a>
          </li>
          
      </ul>
  </nav>
</div>
</aside>