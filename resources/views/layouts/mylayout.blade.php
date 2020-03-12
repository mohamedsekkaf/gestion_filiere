<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application de gestion des filiere</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <link rel="stylesheet" href="{{asset('assets/flat-icon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('temp/temp/styles.css')}}"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
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
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        </li>
            @guest
            <li class="nav-item active">
                <a style="" class="nav-link lore tt" href="{{ url('/login')}}">Login</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link  lore tt" href="{{ url('/register')}}">register</a>
            </li>
            @else
            <li class="nav-item active">
          </li>
            <li class="nav-item active">
            <a class="nav-link lore tt" href="{{url('/ajouter')}}" >{{Auth::user()->name}}</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link lore tt" href="{{ url('/logout')}}">logout</a>
            </li>
            @endguest
        </ul>
    </div>
</nav>
 

@yield("content")

<footer class="footer ">
            <hr class="footer__horizontal-bar">
            <p class="footer__bottom-paragraph">&copy; Copyright 2020 <a href="#" style="color: #00aafe;font-weight:bold;">SEKKAF</a>. All Rights Reserved</p>
      </footer>



<script>
$(function (){
   $('[data-fleep = "tooltip"]').tooltip()
   })
   </script>
  <script>
    $(document).ready(function() {
      var $videoSrc = $("#video").attr("src");
      $('#myModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src',$videoSrc); 
      });
    });
  </script>

</body>
</html>