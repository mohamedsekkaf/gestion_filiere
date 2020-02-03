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
      <div class="container header__content text-center">
        
    <img src="<?php echo e(asset('image/logo.png')); ?> " height="100" alt="">
   
   </div>
      <div class="container">
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

 <a style="display:inline-block;" href="http://127.0.0.1:8000/info/<?php echo e($etapliss->nom_etablessement); ?>"><p class="hover"> Afficher les Filieres </p></a>
 <a href="http://127.0.0.1:8000/showdeplome/<?php echo e($etapliss->nom_etablessement); ?>"><p class="card-text">Afficher les deplomes</p></a>
  </div>
</div>
</div><!-- fin col-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!-- fin row-->
</div><!-- fin container-->
<?php echo e($etap->links()); ?>

    </section>
    
    <section class="contact contact--bg">
      <div class="container">
        <div class="page-section text-center">
          <h2 class="page-section__title--white">Les établissements de Université chouaib doukkali</h2>
          <p class="page-section__paragraph--white">Gérer le site</p>
          <a class="button button--hover" href="http://127.0.0.1:8000/ajouter">LETS GO</a>
        </div>
      </div>
    </section>
   <!--  
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
   
  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/home.blade.php ENDPATH**/ ?>