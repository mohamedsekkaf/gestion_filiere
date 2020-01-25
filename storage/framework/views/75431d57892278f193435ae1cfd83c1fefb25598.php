<?php $__env->startSection("content"); ?>
<div id="carouselId" class="carousel slide" data-ride="carousel">
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
                <h3>Title</h3>
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
<div class="container">
<div class="row">
    <?php $__currentLoopData = $etap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etapliss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6">
<div class="card mb-3 mt-4">
<div class="crd-head  text-center"><img  src="<?php echo e(asset('image/est.png')); ?>" class="card-img-top  round" /></div>
  <div class="card-body">
  <h5 class="card-title"><?php echo e($etapliss->nom); ?></h5>
    <p class="card-text"><small class="text-muted"></small> Localisation  : <?php echo e($etapliss->local); ?></p>
    <p class="card-text"><small class="text-muted"></small>Nombre de feliére  : <?php echo e($etapliss->num_feliere); ?></p>

 <a href="http://127.0.0.1:8000/info/<?php echo e($etapliss->etapl_id); ?>"><p class="card-text">Learn more</p></a>
  </div>
</div>
</div><!-- fin col-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!-- fin row-->
</div><!-- fin container-->
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make("my-layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/testappleid/Desktop/gestion/test/resources/views/welcom.blade.php ENDPATH**/ ?>