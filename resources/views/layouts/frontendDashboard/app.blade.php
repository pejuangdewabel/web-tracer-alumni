<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  {{-- Kumpulan Link --}}
    @stack('prepend-style')
    @include('includes.frontendDashboard.link')
    @stack('addon-style')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    @include('includes.frontendDashboard.navbar')
    

    <!-- Main Sidebar Container -->
    @include('includes.frontendDashboard.sidebar')
    
    <div class="content-wrapper">      
      @yield('header')
      <!-- AKhir Judul -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="card">
                @yield('judul')
                <!-- /.card-header -->
                <div class="card-body">
                  <dl>
                    <!-- Welcome -->
                    @yield('content')
                  </dl>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    {{-- Footer --}}
    @include('includes.frontendDashboard.footer')

    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Apakah Anda Ingin Keluar
          </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik 'Logout' untuk keluar</div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="#">Logout</a>
          <button class="btn btn-danger" type="button" data-dismiss="modal">
            Cancel
          </button>
        </div>
      </div>
    </div>
  </div>

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.frontendDashboard.script')
    @stack('addon-script')

  
</body>

</html>