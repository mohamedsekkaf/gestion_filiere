<?php $__env->startSection("content"); ?>

<div class="container">
<div class="row">
    <?php $__currentLoopData = $fil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feliere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6">
<div class="card mb-3 mt-4">
<div class="crd-head  text-center"><img  src="<?php echo e(asset('image/est.png')); ?>" class="card-img-top  round" /></div>
  <div class="card-body">
  <h5 class="card-title"><?php echo e($feliere->f_nom); ?></h5>
    <p class="card-text"><small class="text-muted"></small> Localisation  : <?php echo e($feliere->f_nummodel); ?></p>

 <a href="http://127.0.0.1:8000/model/<?php echo e($feliere->fel_id); ?>"><p class="card-text">Learn more</p></a>
  </div>
</div>
</div><!-- fin col-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!-- fin row-->
</div><!-- fin container-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/testappleid/Desktop/gestion/test/resources/views/filiere.blade.php ENDPATH**/ ?>