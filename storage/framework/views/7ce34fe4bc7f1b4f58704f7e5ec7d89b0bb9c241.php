<?php $__env->startSection("content"); ?>

<div class="container">
<div class="row">
    <?php $__currentLoopData = $sem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">S <?php echo e($s->nom_s); ?></h3>
  <h5 class="card-title tt"> <?php echo e($s->nom_etabless); ?></h5>
 <a href="http://127.0.0.1:8000/modul/<?php echo e($s->nom_s); ?>"><p class="card-text"> Afficher les Module</p></a>
  </div>
</div>
</div><!-- fin col-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!-- fin row-->
</div><!-- fin container-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/semestre.blade.php ENDPATH**/ ?>