  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('') }}assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Morfeen Official</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('') }}assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      {{-- <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>

          <li class="nav-item">
            <a href="barang" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Stok Barang
              </p>
            </a>

        <li class="nav-item">
             <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
              <p>
                Mutasi
              </p>
            </a>

          <li class="nav-item">
            <a href="transmasuk" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Transaksi Masuk
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Transaksi Keluar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Database Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Database Customer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="vendors" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Database Vendor
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Tambah Admin
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
