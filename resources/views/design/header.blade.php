<!DOCTYPE html>
<html lang="en">
    <head>
 


        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Young grace</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
           <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->


        <link href="css/styles.css" rel="stylesheet" />


        
        <meta property="og:title" content="Молодежная  церковь" />
<meta property="og:type" content="article" />
<meta property="og:description" content="" />
<meta property="og:url" content="https://www.younggrace.space" />
<meta property="og:image" content="img/logo2.jpg"   />

    </head>

    
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Young grace</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Мой Профиль </a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Список людей</a></li>
                        @guest
                            @if (Route::has('login'))
                            <li class="nav-item mx-0 mx-lg-1">
                                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}">{{ __('Авторизация') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item mx-0 mx-lg-1">
                                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item mx-0 mx-lg-1n">
                                <a id="navbarDropdown" class="nav-link py-3 px-0 px-lg-3 rounded" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <li class="nav-item mx-0 mx-lg-1">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>
                                </li>
                                
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                               
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column ">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..."  />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0" >Начни с заполения формы</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <button class="masthead-subheading font-weight-light mb-0 bg-secondary rounded"><a class="nav-link py-3 px-0 px-lg-3 text-white " href="{{ route('register') }}">Приступить к заполению </a></button>
            </div>
        </header>