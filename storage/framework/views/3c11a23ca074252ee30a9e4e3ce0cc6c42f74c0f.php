<?php $__env->startSection("content"); ?>

<!--<div class="container">
<div class="row">
    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Element</h3>
  <h5 class="card-title tt"><?php echo e($elem->nom_element); ?></h5>
  
  <h5 class="card-title tt">L'horaire : <?php echo e($elem->horaire_element); ?></h5>

  </div>
</div>
</div><!-- fin col--
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!-- fin row--
</div><!-- fin container-->


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
                <a class="button button--hover" href="<?php echo e(url('/register')); ?>">Register</a>
                <?php else: ?>
                <div class="homenav">
                    <a class="button button--hover" href="<?php echo e(url('/logout')); ?>">logout</a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <section class="service">

        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6">
                    <div class="card mb-3 mt-4">
                        <div class="card-body">
                            <h3 class="card-title tt">Element</h3>
                            <h5 class="card-title tt"><?php echo e($elem->nom_element); ?></h5>

                            <h5 class="card-title tt">L'horaire : <?php echo e($elem->horaire_element); ?></h5>

                        </div>
                    </div>
                </div><!-- fin col-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><!-- fin row-->
        </div><!-- fin container-->

    </section>

    <section class="contact contact--bg">
        <div class="container">
            <div class="page-section text-center">
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h2 class="page-section__title--white">Les Elements de Module <?php echo e($elem->nom_mod); ?> </h2>
                <?php break; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <p class="page-section__paragraph--white">Gérer le site</p>
                <a class="button button--hover" href="<?php echo e(url('/ajouter')); ?>">LETS GO</a>
            </div>
        </div>
    </section>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/element.blade.php ENDPATH**/ ?>