<aside class="main-sidebar sidebar-dark-primary bg-navy elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('admin-dashboard') }}" class="brand-link mt-5">
        <img src="{{ url('backend/images/user/index.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 logo-sma"
          style="opacity: 0.8" />
        <span class="brand-text font-weight-light"><strong>TRACER ALUMNI</strong></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 d-flex">
          <div class="image">
            <img src="{{ url('backend/images/user/profile2.png') }}" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block"><strong>Aditya Gaca</strong></a>
            <small><strong>ADMIN</strong></small>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 menunav">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item {{ (request()->is('dashboard-admin')) ? 'menu-open' : '' }}">
              <a href="{{ route('admin-dashboard') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item has-treeview {{ (request()->is('admin/data*')) ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ (request()->is('admin/data*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-database"></i>
                <p>
                  Data Master
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('data-pengumuman.index') }}" class="nav-link {{ (request()->is('admin/data-pengumuman')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pengumuman</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('data-berita.index') }}" class="nav-link {{ (request()->is('admin/data-berita*')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Berita</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link {{ (request()->is('data/kuisioner-admin*')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kuisioner</p>
                  </a>
                </li>                
                <li class="nav-item">
                  <a href="" class="nav-link {{ (request()->is('data/responden-admin*')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Responden</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link {{ (request()->is('data/user-admin*')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data User</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Laporan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/laporan-grafik.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Grafik</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview {{ (request()->is('account*')) ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ (request()->is('account*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-alt"></i>
                <p>
                  Profile
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link {{ (request()->is('account/setting*')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Setting Akun</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link {{ (request()->is('account/ubah-password*')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ubah Password</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal2">
                <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>