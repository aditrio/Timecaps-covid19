@extends('home.layouts.app')
@section('title')
    Login | Time Capsule Covid-19    
@endsection
@section('content')
    

<section class="ftco-section ftco-section-2 section-signup page-header img" style="background-image: url(assets/images/bg2.png);">
    <div class="overlay"></div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
      <div class="card card-login py-4">
        <form class="form-login"  method="POST" action="{{ route('login') }}">
           @csrf
          <div class="card-header card-header-primary text-center">
            {{-- <h4 class="card-title">Card Login</h4>
            <div class="social-line">
              <a href="#" class="btn-icon d-flex align-items-center justify-content-center">
                <i class="ion-logo-facebook"></i>
              </a>
              <a href="#" class="btn-icon d-flex align-items-center justify-content-center">
                <i class="ion-logo-twitter"></i>
              </a>
              <a href="#" class="btn-icon d-flex align-items-center justify-content-center">
                <i class="ion-logo-googleplus"></i>
              </a> --}}
            </div>
          </div>
          <div class="card-body pb-4 pt-2">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="ion-ios-mail"></i>
                </span>
              </div>
              <input type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="ion-ios-lock"></i>
                </span>
              </div>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password...">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-check d-flex justify-content-center">
                      <label class="custom-control fill-checkbox mb-0 d-inline-block" >
                                      <input type="checkbox" class="fill-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                      <span class="fill-control-indicator"></span>
                                      <span class="fill-control-description">{{ __('Remember Me') }}</span>
                                  </label>
                    </div>
          </div>
          <div class="footer text-center mb-2">
            
            <button type="submit" class="btn btn-primary btn-round px-5">
                  {{ __('Login') }}
              </button>
                <br>
              @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
              @endif
          </div>
        </form>

      
      </div>
    </div>
  </div>
</div>
</section>
<!-- - - - - -end- - - - -  -->
@endsection