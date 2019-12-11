<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application de gestion des filiere</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

<script src="{{ asset('js/jquery.js')}}"></script>
 
    <script src="{{ asset('js/popper.min.js') }}"></script>
     <script src="{{ asset('js/bootstrap.js') }}"></script>
</head>
<body>
<nav  class="navbar navbar-expand-sm navbar-dark navbarl sticky-top">
    <a class="navbar-brand" href="{{url('/')}}">Accueil</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon data-taget"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        </li>
      
            
            @guest
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/login')}}">Login</a>
            </li>
            <!--<li class="nav-item active">
                <a class="nav-link" href="{{ url('/register')}}">register</a>
            </li>-->
            @else
            <li style="floal:right;" class="nav-item active">
            <a class="nav-link" href="#" >{{Auth::user()->name}}</a>

            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/logout')}}">logout</a>
            </li>
            @endguest
            
        </ul>
       
    </div>
</nav>
 

@yield("content")

<footer>
        <div class="footer2">
                    
        </div>
        <div class="footer1">
<p>desined by ... </p>
        </div>
</footer>
</body>
</html>