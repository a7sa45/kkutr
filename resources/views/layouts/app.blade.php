<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kkutr') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/kkutr.svg') }}">
    <script src="https://kit.fontawesome.com/328124be7f.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    {{--@vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">
    
    
    <style>
        body {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                @guest
                    <a href="{{ url('/') }}" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <img src="{{ asset('images/kkutr.svg') }}" width="45" height="45" alt="">
                    </a>
                @else
                    <a href="{{ url('/') }}" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <img src="{{ asset('images/kkutr.svg') }}" width="45" height="45" alt="">
                    </a>
                @endguest
        
              <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/posts" class="nav-link px-2
                    @if(Route::current()->getName() == 'posts')
                        link-secondary
                    @else
                        link-dark
                    @endif
                    ">المنشورات</a></li>
                <li><a href="{{ route('users') }}" class="nav-link px-2 
                    @if(Route::current()->getName() == 'users')
                        link-secondary
                    @else
                        link-dark
                    @endif
                    ">المستخدمين</a></li>
              </ul>
        
              <div class="col-md-3 text-end">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <a type="button" class="btn btn-outline-primary me-2" href="{{ route('login') }}">دخول</a>
                    @endif
                    @if (Route::has('register'))
                        <a type="button" class="btn btn-primary" style="background-color: rgb(8, 82, 105)" href="{{ route('register') }}">تسجيل</a>
                    @endif
                @else
                <div class="dropdown">
                    <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img style="border-radius: 50%" src="https://itcsvc.kku.edu.sa/KKU_MyKkuWS/UserImage?nickname={{ Auth::user()->username }}" width="30" height="30" alt="user_logo">
                    </a>
                  
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <a type="button" class="dropdown-item text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        خروج
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </ul>
                  </div>
                @endguest
              </div>
            </header>
        </div>

        <br>
        <div class="container">
            <div class="row justify-content-center">
                {{-- Message --}}
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong></strong> {{ session('success') }}
                </div>
                @endif

                @if (Session::has('warning'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <strong></strong> {{ session('warning') }}
                </div>
                @endif
            </div>
        </div>

        {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Kkutr') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>--}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="s{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
