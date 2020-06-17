@extends('home.layouts.app')

@section('title')
    Register | Time Capsule Covid-19    
@endsection

@section('content')
<section class="ftco-section ftco-section-2 section-signup page-header img" style="background-image: url(assets/images/bg3.jpg);">
    <div class="overlay"></div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
      <div class="card card-login py-4">
        <form class="form-login"method="POST" action="{{ route('register') }}">
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
            {{-- name --}}
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="ion-ios-contact"></i>
                </span>
              </div>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username" >
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- email --}}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="ion-ios-mail"></i>
                  </span>
                </div>
                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            
            {{-- password --}}
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="ion-ios-lock"></i>
                </span>
              </div>
              <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
              @error('password')
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
              <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>


           
          <div class="footer text-center mb-2">
            <button type="submit" class="btn btn-primary btn-round px-5">
              {{ __('Register') }}
            </button>
          </div>
        </form>


{{-- djfidjfjsdjfiods --}}


      </div>
    </div>
  </div>
</div>
</section>
@endsection