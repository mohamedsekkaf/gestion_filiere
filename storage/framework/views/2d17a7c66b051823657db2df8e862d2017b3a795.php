<?php $__env->startSection("content"); ?>
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
<?php
$a=0;
        foreach($etap as $etapliss){
      echo '<li data-target="#carouselId" data-slide-to="'.$a.'" class="active"></li>';
      $a++;
        }
   ?>
    </ol>
  
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img  src= "<?php echo e(asset('image/slider1.jpg')); ?>" width="100%" height="450" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                
            </div>
        </div>
        <?php $__currentLoopData = $etap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etapliss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="carousel-item">
            <img src="<?php echo e(asset('images/')); ?>/<?php echo e($etapliss->image); ?>" width="100%" height="450"  alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3 style=" color:red"><?php echo e($etapliss->nom_etablessement); ?></h3>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span style=" color:red" class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span style=" color:red" class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- ================================-->
<div class="container">
<div class="row">
    <?php $__currentLoopData = $etap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etapliss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo csrf_field(); ?>
<div class="col-md-6">
<div class="card mb-3 mt-4">

<div class="crd-head  text-center"><img  src="<?php echo e(asset('images/')); ?>/<?php echo e($etapliss->image); ?> " class="card-img-top  round" /></div>
  <div class="card-body">
  <h5 class="card-title">Nom de L'Etablessement : <?php echo e($etapliss->nom_etablessement); ?></h5>
    <p class="card-text"><small class="text-muted"></small> Localisation  : <?php echo e($etapliss->local_etablessement); ?></p>
 <a href="http://127.0.0.1:8000/info/<?php echo e($etapliss->id_etablessement); ?>"><p class="hover"> Afficher les Filieres </p></a>
 <br>
 <a href="http://127.0.0.1:8000/showdeplome/<?php echo e($etapliss->id_etablessement); ?>"><p class="card-text">Afficher les deplomes</p></a>
  </div>
</div>
</div><!-- fin col-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!-- fin row-->
</div><!-- fin container-->
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/home.blade.php ENDPATH**/ ?>