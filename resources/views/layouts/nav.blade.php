<script src="{{asset('js/nav.js')}}"></script>

<nav class="navbar navbar-expand-lg navbar-{{ isset(Auth::user()->darkmode) && Auth::user()->darkmode ? 'dark' : 'light' }} bg-{{ isset(Auth::user()->darkmode) && Auth::user()->darkmode ? 'dark' : 'light' }}">
    <div class="container-fluid">
        <h2 class="navbar-brand">
            {{ config('app.name', 'Laravel') }}
        </h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="nav nav-pills mr-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">{{ __('Accueil') }}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav nav-pills ml-auto dropdown-menu-{{ isset(Auth::user()->darkmode) && Auth::user()->darkmode ? 'dark' : 'light' }} bg-{{ isset(Auth::user()->darkmode) && Auth::user()->darkmode ? 'dark' : 'light' }}">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('register') }}">{{ __('S\'enregistrer') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right bg-{{ isset(Auth::user()->darkmode) && Auth::user()->darkmode ? 'dark' : 'light' }}" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Deconnexion') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            <li><a class="dropdown-item" href="#">{{ __('R??glages') }}</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="form-check form-switch dropdown-item text-center">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('Darkmode') }}</label>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
