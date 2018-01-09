<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Free-Films</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700&subset=latin,latin-ext" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('css/custom.css')}}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse bg-inverse navbar-fixed-top ">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                
                <a class="navbar-brand" href="#">
                <span><img src="{{ URL::asset('/img/logo.png')}}" width="30" height="30"/></span>
                Free-Films
                </a>
   
             
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="/videos">Start</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Kategorie
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                                        
                         
                            <li><a href="">Dramat</a></li> 
                            <li><a href="">Komedia</a></li>  
                            <li><a href="">Sensacyjny</a></li>  
                            <li><a href="">Kryminał</a></li> 
                            <li><a href="">Akcja</a></li>  
                            <li><a href="">Horror</a></li>   
                            <li><a href="">Przygodowy</a></li> 
                            <li><a href="">Romantyczny</a></li>  
                         
                          
                        </ul>
                      </li>

                    <li><a href="/about">O nas</a></li>
                    <li><a href="/contact">Kontakt</a></li>
                    
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                        <li><a href="/videos/create">Dodaj Film</a></li>
                         <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Zaloguj</a></li>
                            <li><a href="{{ route('register') }}">Zarejestruj</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Wyloguj
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest

                </ul>
            </div>
        </div>
    </nav>

    <!-- wrapper -->
    <div class="site-wrappper">

        <!-- .container -->
        <div class="container site-content">
            
           

            @yield('content')
            
        </div><!-- end of .container -->
        
    </div><!-- end of wrapper -->
    

    <!-- Footer -->
    <footer class="site-footer panel-success ">
        <div class="container" style="text-align:center; ">
            <p>&copy; Wszelkie prawa zastrzeżone- Free-Films-2018 </p>
     
        </div>
    </footer>


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
