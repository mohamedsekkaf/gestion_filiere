<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application de gestion des filiere</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
     <script src="{{ asset('js/bootstrap.js') }}"></script>
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
<!--              <a href="http://gestion-fil-estsb.herokuapp.com/ajouter"><img src="{{asset('image/user.png')}}" class=" img-user round" data-fleep="tooltip" data-placement="bottom" data-original-title="{{Auth::user()->name}}"></a>
 -->            </li>
            <li class="nav-item active">
            <a class="nav-link lore tt" href="http://gestion-fil-estsb.herokuapp.com/ajouter" >{{Auth::user()->name}}</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link lore tt" href="{{ url('/logout')}}">logout</a>
            </li>
            @endguest
        </ul>
    </div>
</nav>
 

@yield("content")

  
<footer class="footer footer--bg">
        <div class="container">
          <div class="page-section">
            <div class="row gutters-100">
              <div class="col-md-4 col-lg-3">
                <div class="footer__first">
                  <h2 class="footer__title"></h2>
                  <p class="footer-first__paragraph"> </p>
                  <ul class="footer-first__social-icons">
                    <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-dribbble-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-behance-logo"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-2">
                <div class="footer__second">
                  <h2 class="footer__title">links</h2>
                  <ul>
                    <li><a href="">Home</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="footer__third">
                  <h2 class="footer__title">CONTACT US</h2>
                  <ul>
                    <li><span class="glyphicon glyphicon-envelope"></span> <a href="#">mohamedsekkaf343@gmail.com</a></li>
                    <li><span class="glyphicon glyphicon-earphone"></span> <a href="#">+"2126-36-67-92-09</a></li>
                  </ul>
                  <h4 class="footer__subscribe__title">Subscribe</h4>
                  <div class="subscribe-section">
                    <input type="email" class="form-control" size="50" placeholder="Enter Your Email" required>
                    <button class="subscribe-section__button" type="button"><img src="assets/images/send-icon.png" alt=""></button>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="footer__fourth">
                  <h4 class="footer__title">HELP</h4>
                  <div class="row">
                   
                  </div>
                  <div class="row">
                   
                  </div>
                </div>
              </div>
            </div>
            <hr class="footer__horizontal-bar">
            <p class="footer__bottom-paragraph">&copy; Copyright 2020 <a href="#" style="color: #00aafe;font-weight:bold;">MS</a>. All Rights Reserved</p>
          </div>
        </div>
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