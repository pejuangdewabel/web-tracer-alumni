    <aside class="main-sidebar sidebar-dark-primary bg-navy elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('dashboard-user') }}" class="brand-link mt-5">
        <img src="{{ url('frontendDashboard/images/index.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 logo-sma"
          style="opacity: 0.8" />
        <span class="brand-text font-weight-light"><strong>TRACER ALUMNI</strong></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 d-flex">
          <div class="image">
            <img src="{{ url('frontendDashboard/images/profile2.png') }}" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block"><strong>Bella</strong></a>
            <small><strong>USER</strong></small>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 menunav">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item {{ (request()->is('dashboard-user')) ? 'menu-open' : '' }}">
              <a href="{{ route('dashboard-user') }}" class="nav-link {{ (request()->is('dashboard-user')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('quisionerOne-user') }}" class="nav-link {{ (request()->is('quisioner*')) ? 'active' : '' }}">
                <i class="nav-icon fab fa-readme"></i>
                <p>Quisioner</p>
              </a>
            </li>
            <li class="nav-item has-treeview {{ (request()->is('user*')) ? 'menu-open' : '' }}">
              <a href="" class="nav-link {{ (request()->is('account*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-alt"></i>
                <p>
                  Profile
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('setting-user') }}" class="nav-link {{ (request()->is('user/setting')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Setting Akun</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('password-user') }}" class="nav-link {{ (request()->is('account/password')) ? 'active' : '' }}">
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