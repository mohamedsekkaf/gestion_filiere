
@extends("layouts/mylayout")

@section("content")
<!-- <div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
  
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img  src= "{{asset('image/slider1.jpg')}}" width="100%" height="450" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
               <h3>Title</h3>
                <p>Description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('image/slider2.jpg')}}" width="100%" height="450"  alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                 <h3>Title</h3>
                <p>Description</p> 
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('image/slider3.jpg')}}" width="100%" height="450"  alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h3>Title</h3>
                <p>Description</p> 
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- ================================
<div class="container">
<div class="row">
   @foreach($etap as $etapliss) 
    @csrf
<div class="col-md-6">
<div class="card mb-3 mt-4">

<div class="crd-head  text-center"><img  src="{{asset('images/')}}/{{$etapliss->image}} " class="card-img-top  round" /></div>
  <div class="card-body">
  <h3 class="card-title tt"> {{ $etapliss->nom_etablessement}}</h3>
    <p class="card-text tt"><small class="text-muted"></small> Localisation  : {{ $etapliss->local_etablessement}}</p>

 <a style="display:inline-block;" href="http://gestion-fil-estsb.herokuapp.com/info/{{$etapliss->nom_etablessement}}"><p class="hover"> Afficher les Filieres </p></a>
 <a href="http://gestion-fil-estsb.herokuapp.com/showdeplome/{{$etapliss->id_etablessement}}"><p class="card-text">Afficher les deplomes</p></a>
  </div>
</div>
</div><!-- fin col

@endforeach
</div><!-- fin row
</div><!-- fin container
<br><br><br><br>
-->


  <div class="main-wrapper">
    <header class="header header--bg">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header"> 
            <a class="navbar-brand" href="#">Université chouaib doukkali</a>
          </div>
        </nav>
        <div class="header__content text-center">
          <h2 class="header__content__title">Application de gestion des filieres</h2>
          <p class="header__content__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
          <a class="button button--margin-right button--hover" href="{{ url('/login')}}">Login</a>
          <a class="button button--hover" href="{{ url('/register')}}" >Register</a>
        </div>
      </div>
    </header>
    
    <section class="service">
        
    <div class="container">
        <div class="row">
    @foreach($etap as $etapliss)
    @csrf
    
<div class="col-md-6">
<div class="card mb-3 mt-4">

<div class="crd-head  text-center"><img  src="{{asset('images/')}}/{{$etapliss->image}} " class="card-img-top  round" /></div>
  <div class="card-body">
  <h3 class="card-title tt"> {{ $etapliss->nom_etablessement}}</h3>
    <p class="card-text tt"><small class="text-muted"></small> Localisation  : {{ $etapliss->local_etablessement}}</p>

 <a style="display:inline-block;" href="http://gestion-fil-estsb.herokuapp.com/info/{{$etapliss->nom_etablessement}}"><p class="hover"> Afficher les Filieres </p></a>
 <a href="http://gestion-fil-estsb.herokuapp.com/showdeplome/{{$etapliss->id_etablessement}}"><p class="card-text">Afficher les deplomes</p></a>
  </div>
</div>
</div><!-- fin col-->
@endforeach
{{ $etap->links()}}
</div>
</div>
    </section>
    
    <section class="contact contact--bg">
      <div class="container">
        <div class="page-section text-center">
          <h2 class="page-section__title--white">We Always Work To Make A Difference</h2>
          <p class="page-section__paragraph--white">If you like our works and have a project,contact us now</p>
          <a class="button button--hover" href="#">CONTACT US</a>
        </div>
      </div>
    </section>
    
    <section class="about">
      <div class="container">
        <div class="page-section">
          <div class="text-center">
            <h2 class="page-section__title">ABOUT DART AGENCY</h2>
            <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
          <div class="row gutters-50">
            <div class="about--narrow">
              <div class="col-md-6">
                <img class="img-responsive" src="assets/images/about-pic.png" alt="">
              </div>
              <div class="col-md-6 about__extra-padding">
                <h3 class="about__content-title">We Believe <br>The Simple Design</h3>
                <p class="about__content-subTitle">Trusted comes with tons of custom widgets, color options, font control and 
                  much more.</p>
                  <p class="about__content-paragraph">We aim to eliminate the task of dividing your project between different agency, corporate and business template. We are a company that offers services for our clients to solve problems and planing strategies for humanity all over the world.</p>
                  <a class="button--light" href="#">READ MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      
      <section class="letsGo letsGo--bg">
        <div class="container">
          <div class="page-section page-section--small text-center">
            <h2 class="page-section__title--white page-section__title--white--less-margin">LET’S MAKE SOMETHING GREAT TOGETHER</h2>
            <p class="page-section__paragraph page-section__paragraph--less-padding">We aim to eliminate the task of dividing your project between different agency between different agency, corporate</p>
            <a class="button button--hover" href="#">LETS GO</a>
          </div>
        </div>
      </section>
      
      <div class="container">
        <section class="project">
          <div class="page-section">
            <div class="text-center">
              <h2 class="page-section__title">FEATURED PROJECT</h2>
              <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
            <div class="row gutters-50">
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/featured-project-pic1.png" target="_blank">
                    <img class="img-responsive" src="assets/images/featured-project-pic1.png" alt="">
                    <div class="caption">
                      <h4 class="project__title">DESIGN</h4>
                      <p class="project__paragraph">Lorem ipsum dolor sit amet </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/featured-project-pic2.png" target="_blank">
                    <img class="img-responsive" src="assets/images/featured-project-pic2.png" alt="">
                    <div class="caption">
                      <h4 class="project__title">DESIGN</h4>
                      <p class="project__paragraph">Lorem ipsum dolor sit amet </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/featured-project-pic3.png" target="_blank">
                    <img class="img-responsive" src="assets/images/featured-project-pic3.png" alt="">
                    <div class="caption">
                      <h4 class="project__title">DESIGN</h4>
                      <p class="project__paragraph">Lorem ipsum dolor sit amet </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="row gutters-50">
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/featured-project-pic4.png" target="_blank">
                    <img class="img-responsive" src="assets/images/featured-project-pic4.png" alt="">
                    <div class="caption">
                      <h4 class="project__title">DESIGN</h4>
                      <p class="project__paragraph">Lorem ipsum dolor sit amet </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/featured-project-pic5.png" target="_blank">
                    <img class="img-responsive" src="assets/images/featured-project-pic5.png" alt="">
                    <div class="caption">
                      <h4 class="project__title">DESIGN</h4>
                      <p class="project__paragraph">Lorem ipsum dolor sit amet </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/featured-project-pic6.png" target="_blank">
                    <img class="img-responsive" src="assets/images/featured-project-pic6.png" alt="">
                    <div class="caption">
                      <h4 class="project__title">DESIGN</h4>
                      <p class="project__paragraph">Lorem ipsum dolor sit amet </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      
      <div class="container">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WP_vM301VZA?autoplay=0" frameborder="0" allowfullscreen="" id="video"  allowscriptaccess="always"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <section class="video-section video-section--bg">
        <div class="container">
          <div class="page-section page-section--large text-center">
            <button class="video-section__icon" data-toggle="modal" data-target="#myModal"><img src="assets/images/video-icon.png" alt=""></button>
          </div>
        </div>
      </section>
      
      <div class="container">
        <section class="team">
          <div class="page-section text-center">
            <h2 class="page-section__title">CREATIVE TEAM</h2>
            <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="row gutters-50">
              <div class="col-md-6 col-lg-3">
                <div class="thumbnail">
                  <a href="assets/images/team-pic1.png" target="_blank">
                    <img src="assets/images/team-pic1.png" alt="">
                    <div class="caption team__caption">
                      <h4 class="team__name">Elodia S. Keefe</h4>
                      <p class="team__title">Founder</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="thumbnail">
                  <a href="assets/images/team-pic2.png" target="_blank">
                    <img src="assets/images/team-pic2.png" alt="">
                    <div class="caption team__caption">
                      <h4 class="team__name">Sheryl D. Trent</h4>
                      <p class="team__title">Co-Founder</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="thumbnail">
                  <a href="assets/images/team-pic3.png" target="_blank">
                    <img src="assets/images/team-pic3.png" alt="">
                    <div class="caption team__caption">
                      <h4 class="team__name">Dorothy J. Cook</h4>
                      <p class="team__title">UI Specialist</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="thumbnail">
                  <a href="assets/images/team-pic4.png" target="_blank">
                    <img src="assets/images/team-pic4.png" alt="">
                    <div class="caption team__caption">
                      <h4 class="team__name">Stuart D. Mahaffey</h4>
                      <p class="team__title">Admin</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      
      <div class="container">
        <section class="price">
          <div class="page-section page-section--small text-center">
            <h2 class="page-section__title">OUR PRICING</h2>
            <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="price__panel-wrapper">
              <div class="row gutters-50">
                <div class="col-md-4">
                  <div class="panel text-center">
                    <div class="panel-heading">
                      <h4 class="price__title">SILVER</h4>
                      <h1 class="price__ammount">&#36;<span class="price__ammount--number">159</span> &#47;Year</h1>
                    </div>
                    <div class="panel-body">
                      <p>Up To 5 user</p>
                      <p>Max. 100 iteam/month</p>
                      <p>Unlimited queries</p>
                      <p>Full statistics</p>
                    </div>
                    <div>
                      <a class="panel__button" href="#">GET THIS PLAN</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel text-center">
                    <div class="panel-heading">
                      <h4 class="price__title">GOLD</h4>
                      <h1 class="price__ammount">&#36; <span class="price__ammount--number">249</span> &#47;Year</h1>
                    </div>
                    <div class="panel-body">
                      <p>Up To 10 user</p>
                      <p>Max. 200 iteam/month</p>
                      <p>Unlimited queries</p>
                      <p>Full statistics</p>
                    </div>
                    <div>
                      <a class="panel__button" href="#">GET THIS PLAN</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel text-center">
                    <div class="panel-heading">
                      <h4 class="price__title">PLATINUM</h4>
                      <h1 class="price__ammount">&#36; <span class="price__ammount--number">459</span> &#47;Year</h1>
                    </div>
                    <div class="panel-body">
                      <p>Up To 5 user</p>
                      <p>Unlimited iteam</p>
                      <p>Unlimited queries</p>
                      <p>Full statistics</p>
                    </div>
                    <div>
                      <a class="panel__button" href="#">GET THIS PLAN</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      
      <section class="overview overview--bg">
        <div class="container">
          <div class="page-section">
            <div class="overview__wrapper text-center">
              <ul>
                <li>
                  <h1 class="overview__number">550</h1>
                  <p class="overview__title">CUP OF COFFEE</p>
                </li>
                <li>
                  <h1 class="overview__number">800</h1>
                  <p class="overview__title">PROJECT DONE</p>
                </li>
                <li>
                  <h1 class="overview__number">400</h1>
                  <p class="overview__title">HAPPY CLIENT</p>
                </li>
                <li>
                  <h1 class="overview__number">3550</h1>
                  <p class="overview__title">AWARDS WIN</p>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </section>
      
      <div class="container">
        <section class="slider">
          <div class="page-section text-center">
            <h2 class="page-section__title">WHAT CLIENT SAY?</h2>
            <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img class="img-responsive slider__image" src="assets/images/slider-image.png" alt="">
                  <p class="slider__paragraph">magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                  <h3 class="slider__name">Sheryl D</h3>
                  <p class="slider__title">UI Design Agency</p>
                </div>

                <div class="item">
                  <img class="img-responsive slider__image" src="assets/images/slider-image.png" alt="">
                  <p class="slider__paragraph">magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                  <h3 class="slider__name">Sheryl D</h3>
                  <p class="slider__title">UI Design Agency</p>
                </div>

                <div class="item">
                  <img class="img-responsive slider__image" src="assets/images/slider-image.png" alt="">
                  <p class="slider__paragraph">magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                  <h3 class="slider__name">Sheryl D</h3>
                  <p class="slider__title">UI Design Agency</p>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="material-icons">chevron_left</i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="material-icons">chevron_right</i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </section>
      </div>
      
      <section class="contact-two contact-two--bg">
        <div class="container">
          <div class="page-section text-center">
            <h2 class="contact-two__title">Keep in touch with us! We are available for 24 hours</h2>
            <a class="button contact-two__button button--hover" href="#">CONTACT US</a>
          </div>
        </div>
      </section>
      
      <div class="container">
        <section class="blog">
          <div class="page-section">
            <div class="text-center">
              <h2 class="page-section__title">OUR BLOG</h2>
              <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
            <div class="row gutters-50">
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/blog-pic1.png" target="_blank">
                    <img class="img-responsive" src="assets/images/blog-pic1.png" alt="">
                    <div class="caption">
                      <h3 class="blog__title">Global Traffic Search</h3>
                      <p class="blog__paragraph">By Jhon Doe <span class="blog__paragraph--slash">&#47;</span> 12 July, 2017 <span class="blog__paragraph--slash">&#47;</span> 2 Comments</p>
                      <h4 class="blog__read-more">READ MORE</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/blog-pic2.png" target="_blank">
                    <img class="img-responsive" src="assets/images/blog-pic2.png" alt="">
                    <div class="caption">
                      <h3 class="blog__title">Global Traffic Search</h3>
                      <p class="blog__paragraph">By Jhon Doe &#47; 12 July, 2017 &#47; 2 Comments</p>
                      <h4 class="blog__read-more">READ MORE</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/blog-pic3.png" target="_blank">
                    <img class="img-responsive" src="assets/images/blog-pic3.png" alt="">
                    <div class="caption">
                      <h3 class="blog__title">Global Traffic Search</h3>
                      <p class="blog__paragraph">By Jhon Doe &#47; 12 July, 2017 &#47; 2 Comments</p>
                      <h4 class="blog__read-more">READ MORE</h4>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      
      <footer class="footer footer--bg">
        <div class="container">
          <div class="page-section">
            <div class="row gutters-100">
              <div class="col-md-4 col-lg-3">
                <div class="footer__first">
                  <h2 class="footer__title">DART AGENCY</h2>
                  <p class="footer-first__paragraph">Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
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
                  <h2 class="footer__title">QUICK LINK</h2>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="footer__third">
                  <h2 class="footer__title">CONTACT US</h2>
                  <ul>
                    <li><span class="glyphicon glyphicon-envelope"></span> <a href="#">dartagency@gmail.com</a></li>
                    <li><span class="glyphicon glyphicon-earphone"></span> <a href="#">+0123-345-6789</a></li>
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
                  <h4 class="footer__title">INSTAGRAM</h4>
                  <div class="row">
                    <ul>
                      <li><a href="#"><img src="assets/images/instagram-pic1.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/instagram-pic2.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/instagram-pic3.png" alt=""></a></li>
                    </ul>
                  </div>
                  <div class="row">
                    <ul>
                      <li><a href="#"><img src="assets/images/instagram-pic4.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/instagram-pic5.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/instagram-pic6.png" alt=""></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <hr class="footer__horizontal-bar">
            <p class="footer__bottom-paragraph">&copy; Copyright 2017 <a href="#" style="color: #00aafe;font-weight:bold;">DartThemes</a>. All Rights Reserved</p>
          </div>
        </div>
      </footer>
  </div>
    
    









@endsection