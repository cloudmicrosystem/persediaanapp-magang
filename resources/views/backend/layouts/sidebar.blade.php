  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="{{ asset('images/icons/logo2.png') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8"  >
          <span class="brand-text font-weight-light">Morfeen Official</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  {{-- <img src="{{ asset('') }}assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" --}}
                      {{-- alt="User Image"> --}}
              </div>
              <div class="info">
                  <a href="#" class="d-block">Welcome {{ Auth::user()->nama }}</a>
              </div>
          </div>
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item menu-open" >
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/" class="nav-link">
                                  <i class="fas fa-quote-right nav-icon"></i>
                                  <p>Dashboard</p>
                              </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book-open"></i>
                                <p>Database Artikel
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/article" class="nav-link">
                                        <i class="fas fa-ellipsis-h nav-icon"></i>
                                        <p>
                                            Artikel
                                        </p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/catarticle" class="nav-link">
                                        <i class="fas fa-ellipsis-h nav-icon"></i>
                                        <p>
                                            Kategori Artikel
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-tag"></i>
                                  <p>Database Product
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="/barang" class="nav-link">
                                          <i class="fas fa-ellipsis-h nav-icon"></i>
                                          <p>
                                              Product
                                          </p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="/kategori" class="nav-link">
                                          <i class="fas fa-ellipsis-h nav-icon"></i>
                                          <p>
                                              Kategori Product
                                          </p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="/gambar" class="nav-link">
                                        <i class="fas fa-ellipsis-h nav-icon"></i>
                                        <p>
                                            Gambar Detail
                                        </p>
                                    </a>
                                </li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="nav-icon far fa-user-circle"></i>
                                  <p>Database Customer
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="/user" class="nav-link">
                                          <i class="fas fa-ellipsis-h nav-icon"></i>
                                          <p>
                                              Customer
                                          </p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>Database Transaksi
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/transaksi" class="nav-link">
                                        <i class="fas fa-ellipsis-h nav-icon"></i>
                                        <p>
                                            Transaksi Masuk
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon 	far fa-folder"></i>
                                <p>Database Laporan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="user" class="nav-link">
                                        <i class="fas fa-ellipsis-h nav-icon"></i>
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
