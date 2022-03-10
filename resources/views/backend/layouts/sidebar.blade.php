  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="{{ asset('') }}assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Morfeen Official</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('') }}assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ Auth::user()->nama }}</a>
              </div>
          </div>
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item menu-open">
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Dashboard</p>
                              </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Database Artikel
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="user" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Data Artikel
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-table"></i>
                                  <p>Database Product
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="barang" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>
                                              Data Stock
                                          </p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="kategori" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>
                                              Data Kategori
                                          </p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="gambar" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Data Detail Product
                                        </p>
                                    </a>
                                </li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-table"></i>
                                  <p>Database Customer
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="user" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>
                                              Data Customer
                                          </p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Database Transaksi
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="user" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Data Transaksi
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Database Laporan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="user" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Laporan Laba Rugi
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                      </ul>
                  </li>
              </ul>
          </nav>
      </div>
  </aside>
