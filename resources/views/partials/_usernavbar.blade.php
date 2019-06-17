<!-- navbar -->
{{-- <nav class="navbar navbar-expand-lg navbar-light " id="usernav">
  <a class="navbar-brand ml-1" href="{{route('viewproject')}}">Welcome {{auth()->user()->name}}</a> --}}
  <nav class="navbar navbar-expand-lg navbar-light" id="usernav" >
    <a class="navbar-brand " href="{{route('viewproject')}}">
      <div class="logoimg"  >
        <img src="{{ asset('images/logo/'.$logos[0]->value)}}" width="100%">
      </div>
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-2" id="navitem">

      <li class="nav-item">
        <a class="nav-link" href="{{route('viewproject')}}">View Project</a>
      </li>
      {{-- @auth --}}

        <li class="nav-item">
          <a class="nav-link" href="{{route('userinvestment')}}">My Invesment</a>
        </li>
        @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
          </li>
        @endauth
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
        @endguest

    </ul>


    {{-- @endauth --}}
    <!-- Right Side Of Navbar -->
    {{-- <ul class="navbar-nav ml-auto "> --}}
        <!-- Authentication Links -->
        {{-- @guest --}}
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                <a href="#">Login</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a> --}}

                {{-- <div class="dropdown-menu dropdown-menu-right bg-dark "  aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}">log out</a>

                </div>
            </li> --}}
        {{-- @endguest --}}
    {{-- </ul> --}}

  </div>
</nav>
<!-- end of nav -->
