<div class="collapse navbar-collapse d-inline-block" id="navbarNav">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#ffffff; font-size:28px;"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    @guest
      {{-- Jika guest yang mengakses halaman --}}
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link text-white js-scroll-trigger mr-3" href=" {{ route('root') }}">Home</a>
        </li>

        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white mr-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Categories
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-dark" href="{{ route('root') }}">
                  Beach
                </a>

                <a class="dropdown-item text-dark" href="{{ route('root') }}">
                    Mountain
                </a>
              </div>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white js-scroll-trigger mr-3" href=" {{ route('root') }}">About Us</a>
        </li>
      </ul>
    @else
        @if(auth()->user()->role=="Admin")
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-white js-scroll-trigger mr-3" href=" {{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white js-scroll-trigger mr-3" href=" {{ route('home') }}">Admin</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white js-scroll-trigger mr-3" href=" {{ route('home') }}">User</a>
                </li>
            </ul>

        @elseif(auth()->user()->role=="User")
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-white js-scroll-trigger mr-3" href=" {{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white js-scroll-trigger mr-3" href=" {{ route('home') }}">Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white js-scroll-trigger mr-3" href=" {{ route('home') }}">Blog</a>
                </li>
            </ul>
      @endif
    @endguest
  
      <ul class="navbar-nav ml-auto">
        @guest
            {{-- Jika guest yang mengakses halaman --}}
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white js-scroll-trigger mr-3" href="{{ route('register') }}">
                        <i class="fas fa-user"></i>
                        {{ __('Sign Up') }}
                    </a>
                </li>      
            @endif

            <li class="nav-item">
              <a class="nav-link text-white js-scroll-trigger mr-3" href="{{ route('login') }}">
                <i class="fas fa-sign-out-alt mr-2"></i>
                {{ __('Login') }}
            </a>
            </li>
            
        @else
            {{-- Jika admin yang mengakses halaman --}}
            @if(auth()->user()->role=="Admin")
                <li class="nav-item">
                    <a class="nav-link text-white js-scroll-trigger mr-3" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
  
            {{-- Jika guest yang mengakses halaman --}}
            @elseif(auth()->user()->role=="User")
                <li class="nav-item">
                    <a class="nav-link text-white js-scroll-trigger mr-3" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endif
        @endguest
      </ul>
    </div>
  </div>