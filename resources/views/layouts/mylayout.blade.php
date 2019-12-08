<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  
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
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        </div>
      </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Link</a>
            </li>
            @guest
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/login')}}">Login</a>
            </li>
            <!--<li class="nav-item active">
                <a class="nav-link" href="{{ url('/register')}}">register</a>
            </li>-->
            @else
            <li class="nav-item active">
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


<script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>