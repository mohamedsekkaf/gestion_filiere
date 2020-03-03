<?php $__env->startSection("content"); ?>
<!--
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
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>-->


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
                <?php $__currentLoopData = $sem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php break; ?>
                <div class="col-md-6">
                    <div class="card mb-3 mt-4">
                        <div class="card-body">
                            <h3 class="card-title tt"></h3>
                            <h5 class="card-title tt"> </h5>
                            <a href="<?php echo e(url('/modul')); ?>/<?php echo e($s->nom_s); ?>">
                                <p class="card-text">/p>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <?php
echo '<div class="container">';
echo '<div class="row">';
    foreach($sem as $s){
        echo '<div style="text-align:center;" class="card col-12">';
        echo '<h3> Semestre : '.substr($s->nom_s,0,1).'</h3>';
        foreach($mod as $m ){
            if($s->nom_s==$m->nom_se){
                echo '<h4 class="te">Module : '.$m->nom_module.'</h4>';
            }

            foreach($elem as $e){
                if($m->nom_module==$e->nom_mod && $s->nom_s==$e->nom_sem){
                    echo '<h6 class="tee">Element : '.$e->nom_element.'</h6>';
                }
            }
        }
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
    
    /* foreach($sem as $s){
        echo '<h1>'.$s->nom_s.'</h1>';
        foreach($mod as $m ){
            if($s->nom_s==$m->nom_se && $s->nom_file==$m->nom_fil){
                echo '<h3 class="te">'.$m->nom_module.'</h3>';
            }
            foreach($elem as $e){
                if($m->nom_module==$e->nom_mod && $m->nom_se==$e->nom_sem){
                    echo '<h5 class="tee">'.$e->nom_element.'</h5>';
                }
            }
        }
    } */
    ?>
    <a href="<?php echo e(url('/pdf')); ?>/<?php echo e($s->nom_file); ?>">Télécharger PDF</a>

    <section class="contact contact--bg">
        <div class="container">
            <div class="page-section text-center">
                <?php $__currentLoopData = $sem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h2 class="page-section__title--white">Les Semestres de Feliere <?php echo e($s->nom_file); ?> </h2>
                <?php break; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <p class="page-section__paragraph--white">Gérer le site</p>
                <a class="button button--hover" href="<?php echo e(url('/ajouter')); ?>">LETS GO</a>
            </div>
        </div>
    </section>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/semestre.blade.php ENDPATH**/ ?>