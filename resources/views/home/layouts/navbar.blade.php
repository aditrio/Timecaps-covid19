<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">TCC-19.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            {{-- <li class="nav-item d-flex ">
              <a class="nav-link d-flex align-items-center" href="#">Discover <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item d-flex">
              <a class="nav-link d-flex align-items-center" href="/about">About</a>
            </li> --}}
            @if (Route::has('login'))
                
                    @auth
                    <li  class="nav-item d-flex">
                        <a class="nav-link d-flex align-items-center btn btn-outline-success" href="/profile">Profile</a>
                    </li>   
                    @else
                    <li  class="nav-item d-flex">
                        <a class="nav-link d-flex align-items-center" href="{{ route('login') }}">Login</a>
                    </li>
                     @if (Route::has('register'))
                         <li  class="nav-item d-flex">
                            <a class="nav-link d-flex align-items-center" href="{{ route('register') }}">Register</a>
                         </li>
                            
                    @endif
                    @endauth
              
            @endif
          </ul>
      </div>
      </div>
  </nav>
<!-- END nav -->