<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" /> -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style media="screen">
      .pagination{ font-size: 10px;}
      .pagination li{ display: inline-block;}
      .main{
        display: flex;
      }
      ul{
        list-style: none;
        text-decoration: none;
      }
    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav style="border-bottom: 1px solid #393d46; padding:0; margin:0;"class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container navb">
                <a class="navbar-brand" style="color:white;" href="{{ url('/') }}">
                    RegretList
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color:white;"class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <aside style="width: 210px; height: 100%; position: fixed; background: #2f323a;">
                  <div id="sidebar" class="nav-collapse">
                    <ul style="color:white; "class="sidebar-menu" id="nav-accordion">
                      <p class="centered"><a href="{{route('home')}}"><img src="{{asset('assets/img/profileimg.png')}}" class="img-circle" width="80"></a></p>
                      <h5 class="centered">Profile</h5>
                      <li class="mt">
                        <a class="active" href="{{route('home')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                          </a>
                      </li>
                      <li class="sub-menu">
                        <a href="javascript:;">
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                          </a>
                      </li>
                    </ul>
                  </div>
            </aside>
            <div>
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
