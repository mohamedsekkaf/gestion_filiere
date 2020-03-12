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
<br><br><br>
<form action="<?php echo e(url('/comment')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('POST'); ?>
    <?php echo csrf_field(); ?>
    <div class="container">
        <div class="row">
            <form action=""></form>
            <div class="col-lg-4">
                <label for="">Votre Nom et Prenom <span style="color:red;">*</span></label>
                <input name="nom" class="form-control" type="text" value="<?php echo e(old('nom')); ?>"
                    placeholder="Votre Nom et Prenom">
            </div>
            <div class="col-lg-4">
                <label for="">Votre Email <span style="color:red;">*</span></label>
                <input name="email" class="form-control" type="email" value="<?php echo e(old('email')); ?>"
                    placeholder="Votre Email">
            </div>
            <div class="col-lg-4">
                <label for="">Votre Commentaire <span style="color:red;">*</span></label>
                <input name="comment" class="form-control" type="text" value="<?php echo e(old('comment')); ?>"
                    placeholder="Votre Commentaire">
            </div>
            <br><br><br>
            <div class="col-12">
                <input class="form-control" value="Add Comment" type="submit">
            </div>
        </div>
    </div>
    <div class="col-12">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger mt-5">
            <?php echo e($err); ?>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</form>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <img class="card-img-top user" src="<?php echo e(asset('image/user.png')); ?>" alt="">
                <div class="card-body">
                    <h5 class="card-title">@ <?php echo e($c->nom); ?></h5>
                    <p class="card-text"><?php echo e($c->comment); ?></p>
                </div>
            </div><br><br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
    <?php echo e($comment->links()); ?>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/home.blade.php ENDPATH**/ ?>