@auth()
    @include('dash.layouts.navbars.navs.auth')
@endauth

@guest()
    @include('dash.layouts.navbars.navs.guest')
@endguest
