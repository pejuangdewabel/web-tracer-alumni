<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    {{-- Link --}}
    @stack('prepend-style')
    @include('includes.frontendUser.link')
    @stack('addon-style')
  </head>

  <body>
    <!-- This is Navbar -->
   @include('includes.frontendUser.navbar')

   {{-- Content --}}
   @yield('content')
    

    <!-- Footer -->
   @include('includes.frontendUser.footer')

    <!-- Script -->    
    @stack('prepend-script')
    @include('includes.frontendUser.script')
    @stack('addon-script')
  </body>
</html>
