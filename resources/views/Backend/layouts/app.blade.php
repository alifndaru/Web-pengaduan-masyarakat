<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/stisla/assets/css/bootstrap.min.css') }}">
  {{-- <link rel="stylesheet" href="assets/stisla/assets/css/all.min.css"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/stisla/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/stisla/assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      {{-- navbar --}}
     @include('Backend.layouts.navbar')
      {{-- end navbar --}}

      {{-- sodebar --}}
    @include('Backend.layouts.sidebar')
      {{-- end sidebarss --}}

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
     @include('Backend.layouts.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/stisla/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/stisla/assets/js/popper.js')}}"></script>
  <script src="{{asset('assets/stisla/assets/js/tooltip.js')}}"></script>
  <script src="{{asset('assets/stisla/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/stisla/assets/js/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/stisla/assets/js/moment.min.js')}}"></script>
  <script src="{{asset('assets/stisla/assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{asset('assets/stisla/assets/js/scripts.js')}}"></script>
  <script src="{{asset('assets/stisla/assets/js/custom.js')}}"></script>
</body>
</html>