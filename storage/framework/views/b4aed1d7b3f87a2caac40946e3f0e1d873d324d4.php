<?php $__env->startSection("content"); ?>

<div class="container">
<div class="row">
    <?php $__currentLoopData = $fil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feliere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt"> Filiere </h3>
  <h5 class="card-title tt"> <?php echo e($feliere->nom_filiere); ?></h5>
    <p class="card-text tt"><small class="text-muted"></small> nombre de module  : <?php echo e($feliere->nummodel); ?></p>

 <a href="http://127.0.0.1:8000/semestre/<?php echo e($feliere->nom_filiere); ?>"><p class="card-text">Afficher les Semestre</p></a>
  </div>
</div>
</div><!-- fin col-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!-- fin row-->
</div><!-- fin container-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/filiere.blade.php ENDPATH**/ ?>