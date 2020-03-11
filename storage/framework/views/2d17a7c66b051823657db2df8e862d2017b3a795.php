<?php $__env->startSection("content"); ?>
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
                <?php $__currentLoopData = $etap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etapliss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo csrf_field(); ?>
                <div class="col-lg-6">
                    <div class="card mb-3 mt-4">
                        <div class="crd-head  text-center"><img src="<?php echo e(asset('images/')); ?>/<?php echo e($etapliss->image); ?> "
                                class="card-img-top  roundd" /></div>
                        <div class="card-body">
                            <h3 class="card-title tt"> <?php echo e($etapliss->nom_etablessement); ?></h3>
                            <p class="card-text tt"><small class="text-muted"></small> Localisation :
                                <?php echo e($etapliss->local_etablessement); ?></p>

                            <a style="display:inline-block;" href="<?php echo e(url('/info')); ?>/<?php echo e($etapliss->nom_etablessement); ?>">
                                <p class="hover"> Afficher les Filieres </p>
                            </a>
                            <a href="<?php echo e(url('/showdeplome')); ?>/<?php echo e($etapliss->nom_etablessement); ?>">
                                <p class="card-text">Afficher les deplomes</p>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php echo e($etap->links()); ?>

    </section>
    <section class="contact contact--bg">
        <div class="container">
            <div class="page-section text-center">
                <h2 class="page-section__title--white">Les établissements de Université chouaib doukkali</h2>
                <p class="page-section__paragraph--white">Gérer Le Site </p>
                <a class="button button--hover" href="<?php echo e(url('/ajouter')); ?>">LETS GO</a>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/home.blade.php ENDPATH**/ ?>