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

<br><br><br>
<form action="{{ url('/comment') }}" method="POST" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="container">
        <div class="row">
            <form action=""></form>
            <div class="col-lg-4">
                <label for="">Votre Nom et Prenom <span style="color:red;">*</span></label>
                <input name="nom" class="form-control" type="text" placeholder="Votre Nom et Prenom">
            </div>
            <div class="col-lg-4">
                <label for="">Votre Email <span style="color:red;">*</span></label>
                <input name="email" class="form-control" type="email" placeholder="Votre Email">
            </div>
            <div class="col-lg-4">
                <label for="">Votre Commentaire <span style="color:red;">*</span></label>
                <input name="comment" class="form-control" type="text" placeholder="Votre Commentaire">
            </div>
            <br><br><br>
            <div class="col-12">
                <input class="form-control" value="Add Comment" type="submit">
            </div>
        </div>
    </div>
    <div class="col-12">
        @foreach($errors->all() as $err)
        <div class="alert alert-danger mt-5">
            {{$err}}
        </div>
        @endforeach
    </div>
</form>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-12">
        @foreach($comment as $c)
            <div class="card">
                <img class="card-img-top user"  src="{{asset('image/user.png')}}" alt="">
                <div class="card-body">
                    <h5 class="card-title">@ {{ $c->nom }}</h5>
                    <p class="card-text">{{ $c->comment }}</p>
                </div>
            </div><br><br>
            @endforeach
        </div>
        
    </div>
    {{ $comment->links()}}
</div>
<footer class="footer ">
            <hr class="footer__horizontal-bar">
            <p class="footer__bottom-paragraph">&copy; Copyright 2020 <a href="#" style="color: #00aafe;font-weight:bold;">SEKKAF</a>. All Rights Reserved</p>
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
     <script src="{{ asset('js/bootstrap.js') }}"></script>

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