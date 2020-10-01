<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('frontendDashboard/libraries/plugins/fontawesome-free/css/all.min.css') }}" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('frontendDashboard/libraries/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="50x50" href="{{ url('frontendDashboard/images/index.jpg') }}" />
  <!-- Cutom CSS -->
  <link rel="stylesheet" href="{{ url('frontendDashboard/styles/main.css') }}" />
  <!-- Custom Font Poppin -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet" />
  <!-- AOS -->
  <link href="{{ url('frontendDashboard/libraries/aos/aos.css') }}" rel="stylesheet">

</head>

<body>
  @yield('content')

  <!-- jQuery -->
  <script src="{{ url('frontendDashboard/libraries/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ url('frontendDashboard/libraries/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ url('frontendDashboard/libraries/dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ url('frontendDashboard/libraries/dist/js/demo.js') }}"></script>
  <!-- Toasted -->
  <script src="https://unpkg.com/vue-toasted"></script>
  <!-- AOS -->
  <script src="{{ url('frontendDashboard/libraries/aos/aos.js') }}"></script>

  <!-- Page script -->
  <script>
    AOS.init();
  </script>
</body>

</html>