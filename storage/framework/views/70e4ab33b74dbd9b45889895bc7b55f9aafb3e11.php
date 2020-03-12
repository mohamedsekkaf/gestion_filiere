<?php $__env->startSection('content'); ?>
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
                <div class="col-12">
                    <h3 style="text-align:center;"> Ajouter Etablissement ou Filiere ou <br> Module ou Element ou
                        Diplôme </h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="head d-flex justify-content-center">
                <div class="row" style="display: block!important;">
                    <a href="<?php echo e(asset('/ajouter/ajouter-etablessement')); ?>"><img class="circle"
                            src="<?php echo e(asset('image/school.png')); ?>" data-fleep="tooltip" data-placement="bottom"
                            data-original-title="Ajouter Etablissement" data-toggle="modal" /></a>
                    <a href="<?php echo e(asset('/ajouter/ajouter-filiere')); ?>"> <img class="circle"
                            src="<?php echo e(asset('image/filiere.png')); ?>" data-toggle="modal" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Ajouter Filiere" /></a>
                    <a href="<?php echo e(asset('/ajouter/ajouter-semestre')); ?>"> <img class="circle"
                            src="<?php echo e(asset('image/semestre.png')); ?>" data-toggle="modal" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Ajouter semestre" /></a>
                    <a href="<?php echo e(asset('/ajouter/ajouter-module')); ?>"><img class="circle"
                            src="<?php echo e(asset('image/module.png')); ?>" data-toggle="modal" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Ajouter Modele" /></a>
                    <a href="<?php echo e(asset('/ajouter/ajouter-element')); ?>"><img class="circle"
                            src="<?php echo e(asset('image/cour.png')); ?>" data-toggle="modal" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Ajouter Element" /></a>
                    <a href="<?php echo e(asset('/ajouter/ajouter-deplome')); ?>"><img class="circle"
                            src="<?php echo e(asset('image/diploma1.png')); ?>" data-fleep="tooltip" data-placement="bottom"
                            data-original-title="Ajouter Diplôme" data-toggle="modal" /></a>
                    <!-- data-target="#deplome" -->
                </div>
            </div>
            <!--fin class hread -->
        </div><!-- fi container -->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 style="text-align:center;"> Modifier Etablissement ou Filiere ou <br> Module ou Element ou
                        Diplôme </h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="head d-flex justify-content-center">
                <div class="row" style="display: block!important;">
                    <a href="<?php echo e(asset('/update/update-etablessement')); ?>"><img class="circle"
                            src="<?php echo e(asset('image/school.png')); ?>" data-fleep="tooltip" data-placement="bottom"
                            data-original-title="Modefier Etablissement" data-toggle="modal" data-target="" /></a>
                    <a href="<?php echo e(asset('/update/update-filiere')); ?>"> <img class="circle"
                            src="<?php echo e(asset('image/filiere.png')); ?>" data-toggle="modal" data-target=""
                            data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Filiere" /></a>
                    <a href="<?php echo e(asset('/update/update-semestre')); ?>"> <img class="circle"
                            src="<?php echo e(asset('image/semestre.png')); ?>" data-toggle="modal" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Modefier semestre" /></a>
                    <a href="<?php echo e(asset('/update/update-module')); ?>"><img class="circle"
                            src="<?php echo e(asset('image/module.png')); ?>" data-toggle="modal" data-target=""
                            data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Modele" /></a>
                    <a href="<?php echo e(asset('/update/update-element')); ?>"><img class="circle"
                            src="<?php echo e(asset('image/cour.png')); ?>" data-toggle="modal" data-target="" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Modefier Element" /></a>
                    <a href="<?php echo e(asset('/update/update-deplome')); ?>"><img class="circle"
                            src="<?php echo e(asset('image/diploma1.png')); ?>" data-fleep="tooltip" data-placement="bottom"
                            data-original-title="Modefier Diplôme" data-toggle="modal" data-target="" /></a>

                </div>
            </div>
            <!--fin class hread -->
        </div><!-- fi container -->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 style="text-align:center;"> Supprimer Etablissement ou Filiere ou <br> Module ou Element ou
                        Diplôme </h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="head d-flex justify-content-center">
                <div class="row" style="display: block!important;">
                    <a href="<?php echo e(asset('/delete/delete-etablessement')); ?>"><img class="circle"
                            src="<?php echo e(asset('image/school.png')); ?>" data-fleep="tooltip" data-placement="bottom"
                            data-original-title="Supprimer Etablissement" data-toggle="modal" data-target="" /></a>
                    <a href="<?php echo e(asset('/delete/delete-filiere')); ?>"> <img class="circle"
                            src="<?php echo e(asset('image/filiere.png')); ?>" data-toggle="modal" data-target=""
                            data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Filiere" /></a>
                    <a href="<?php echo e(asset('/delete/delete-semestre')); ?>"> <img class="circle"
                            src="<?php echo e(asset('image/semestre.png')); ?>" data-toggle="modal" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Supprimer semestre" /></a>
                    <a href="<?php echo e(asset('/delete/delete-module')); ?>"><img class="circle"
                            src="<?php echo e(asset('image/module.png')); ?>" data-toggle="modal" data-target=""
                            data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Modele" /></a>
                    <a href="<?php echo e(asset('/delete/delete-element')); ?>"><img class="circle"
                            src="<?php echo e(asset('image/cour.png')); ?>" data-toggle="modal" data-target="" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Supprimer  Element" /></a>
                    <a href="<?php echo e(asset('/delete/delete-deplome')); ?>"><img class="circle"
                            src="<?php echo e(asset('image/diploma1.png')); ?>" data-fleep="tooltip" data-placement="bottom"
                            data-original-title="Supprimer  Diplôme" data-toggle="modal" data-target="" /></a>
                </div>
            </div>
            <!--fin class hread -->
        </div><!-- fi container -->
    </section>
</div>
<form action="<?php echo e(url('/deletecomment')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('POST'); ?>
    <?php echo csrf_field(); ?>
    <select name="slect_nom" id="">
        <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $com): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($com->nom); ?>"><?php echo e($com->nom); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <input type="submit" class="form-control">
</form>
<?php $__env->stopSection(); ?>
<script>
$(function() {
    $('[data-fleep = "tooltip"]').tooltip()
})
</script>
<?php echo $__env->make('layouts/mylayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/ajouter.blade.php ENDPATH**/ ?>