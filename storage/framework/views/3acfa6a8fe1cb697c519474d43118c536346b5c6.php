<?php $__env->startSection("content"); ?>

<div class="container">
<div class="row">
    <?php $__currentLoopData = $dep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deplome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt"> Deplome</h3>
  <h5 class="card-title tt"> <?php echo e($deplome->nom_deplome); ?></h5>

    <p class="card-text tt"><small class="text-muted"></small> Duree de Deplome  : <?php echo e($deplome->duree_deplome); ?></p>
  </div>
</div>
</div><!-- fin col-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!-- fin row-->
</div><!-- fin container-->
<br><br><br><br><br><br><br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/deplome.blade.php ENDPATH**/ ?>