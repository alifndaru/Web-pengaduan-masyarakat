<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login Page</title>

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
<div id="app">
  <section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="login-brand">
            {{-- <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> --}}
          </div>
          
          @if (session()->has('success'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session('success')}}
              </div>
              <button class="btn-close" data-bs-dismiss="alert" aria-label="close" type="button"></button>
          @endif
          @if (session()->has('LoginError'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              {{session('LoginError')}}
            </div>
            <button class="btn-close" data-bs-dismiss="alert" aria-label="close" type="button"></button>
          @endif
          <div class="card card-primary">
            <div class="card-header"><h4>Login</h4></div>

            <div class="card-body">
              <form method="POST" action="{{route('auth')}}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    Please fill in your email
                  </div>
                </div>

                <div class="form-group">
                  <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                    <div class="float-right">
                      <a href="auth-forgot-password.html" class="text-small">
                        Forgot Password?
                      </a>
                    </div>
                  </div>
                  <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                  <div class="invalid-feedback">
                    please fill in your password
                  </div>
                </div>

                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="mt-5 text-muted text-center">
            Don't have an account? <a href="{{route('register')}}">register akun</a>
          </div>
          <div class="simple-footer">
            Copyright &copy; Stisla 2018
          </div>
        </div>
      </div>
    </div>
  </section>
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