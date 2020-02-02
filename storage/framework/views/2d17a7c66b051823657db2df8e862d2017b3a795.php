<?php $__env->startSection("content"); ?>
<!-- <div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
  
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img  src= "<?php echo e(asset('image/slider1.jpg')); ?>" width="100%" height="450" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
               <h3>Title</h3>
                <p>Description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(asset('image/slider2.jpg')); ?>" width="100%" height="450"  alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                 <h3>Title</h3>
                <p>Description</p> 
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(asset('image/slider3.jpg')); ?>" width="100%" height="450"  alt="Third slide">
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
   <?php $__currentLoopData = $etap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etapliss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <?php echo csrf_field(); ?>
<div class="col-md-6">
<div class="card mb-3 mt-4">

<div class="crd-head  text-center"><img  src="<?php echo e(asset('images/')); ?>/<?php echo e($etapliss->image); ?> " class="card-img-top  round" /></div>
  <div class="card-body">
  <h3 class="card-title tt"> <?php echo e($etapliss->nom_etablessement); ?></h3>
    <p class="card-text tt"><small class="text-muted"></small> Localisation  : <?php echo e($etapliss->local_etablessement); ?></p>

 <a style="display:inline-block;" href="http://gestion-fil-estsb.herokuapp.com/info/<?php echo e($etapliss->nom_etablessement); ?>"><p class="hover"> Afficher les Filieres </p></a>
 <a href="http://gestion-fil-estsb.herokuapp.com/showdeplome/<?php echo e($etapliss->id_etablessement); ?>"><p class="card-text">Afficher les deplomes</p></a>
  </div>
</div>
</div><!-- fin col

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
          <p class="header__content__paragraph">Ecole superieur de technologie </p>
          <?php if(auth()->guard()->guest()): ?>
          <a class="button button--margin-right button--hover" href="<?php echo e(url('/login')); ?>">Login</a>
          <a class="button button--hover" href="<?php echo e(url('/register')); ?>" >Register</a>
          <?php else: ?>

          <div class="homenav">
            <a class="button button--hover" href="<?php echo e(url('/logout')); ?>" >logout</a>
                </div>
          <?php endif; ?>
        </div>
      </div>
    </header>
    
    <section class="service">
        
    <div class="container">
        <div class="row">
    <?php $__currentLoopData = $etap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etapliss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo csrf_field(); ?>
    
<div class="col-md-6">
<div class="card mb-3 mt-4">

<div class="crd-head  text-center"><img  src="<?php echo e(asset('images/')); ?>/<?php echo e($etapliss->image); ?> " class="card-img-top  round" /></div>
  <div class="card-body">
  <h3 class="card-title tt"> <?php echo e($etapliss->nom_etablessement); ?></h3>
    <p class="card-text tt"><small class="text-muted"></small> Localisation  : <?php echo e($etapliss->local_etablessement); ?></p>

 <a style="display:inline-block;" href="http://gestion-fil-estsb.herokuapp.com/info/<?php echo e($etapliss->nom_etablessement); ?>"><p class="hover"> Afficher les Filieres </p></a>
 <a href="http://gestion-fil-estsb.herokuapp.com/showdeplome/<?php echo e($etapliss->nom_etablessement); ?>"><p class="card-text">Afficher les deplomes</p></a>
  </div>
</div>
</div><!-- fin col-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($etap->links()); ?>

</div>
</div>
    </section>
    
 <!--    <section class="contact contact--bg">
      <div class="container">
        <div class="page-section text-center">
          <h2 class="page-section__title--white"></h2>
          <p class="page-section__paragraph--white">test</p>
          <a class="button button--hover" href="#">LETS GO</a>
        </div>
      </div>
    </section>
    
    <section class="about">
      <div class="container">
        <div class="page-section">
          <div class="text-center">
           
          </div>
          <div class="row gutters-50">
            <div class="about--narrow">
              
              <div class="col-md-6 about__extra-padding">
                
                </div>
              </div>
            </div>
          </div>
        </div>

      </section> -->
      
 <!--      <section class="letsGo letsGo--bg">
        <div class="container">
          <div class="page-section page-section--small text-center">
            <h2 class="page-section__title--white page-section__title--white--less-margin">test</h2>
            <p class="page-section__paragraph page-section__paragraph--less-padding">test</p>
            <a class="button button--hover" href="#">LETS GO</a>
          </div>
        </div>
      </section>
      
      <div class="container">
        <section class="project">
          <div class="page-section">
            <div class="text-center">
              <h2 class="page-section__title">test</h2>
              <p class="page-section__paragraph">test</p>
            </div>
            <div class="row gutters-50">
              <div class="col-md-4">
             
              
              </div>
            </div>
          </div>
        </section>
      </div>
     
     -->
   
      
   
      
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
            <p class="footer__bottom-paragraph">&copy; Copyright 2020 <a href="#" style="color: #00aafe;font-weight:bold;">MS</a>. All Rights Reserved</p>
          </div>
        </div>
      </footer>
  </div>
    
    









<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/home.blade.php ENDPATH**/ ?>