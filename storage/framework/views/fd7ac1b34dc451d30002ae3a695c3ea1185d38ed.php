<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application de gestion des filiere</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
     <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
     <link rel="stylesheet" href="<?php echo e(asset('assets/flat-icon/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('temp/temp/styles.css')); ?>"> 
    
</head>
<body>
<nav  class="navbar navbar-expand-sm navbar-dark navbarl sticky-top">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Accueil</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon data-taget"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        </li>
            <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item active">
                <a style="" class="nav-link lore tt" href="<?php echo e(url('/login')); ?>">Login</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link  lore tt" href="<?php echo e(url('/register')); ?>">register</a>
            </li>
            <?php else: ?>
            <li class="nav-item active">
<!--              <a href="http://gestion-fil-estsb.herokuapp.com/ajouter"><img src="<?php echo e(asset('image/user.png')); ?>" class=" img-user round" data-fleep="tooltip" data-placement="bottom" data-original-title="<?php echo e(Auth::user()->name); ?>"></a>
 -->            </li>
            <li class="nav-item active">
            <a class="nav-link lore tt" href="<?php echo e(url('/ajouter')); ?>" ><?php echo e(Auth::user()->name); ?></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link lore tt" href="<?php echo e(url('/logout')); ?>">logout</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
 

<?php echo $__env->yieldContent("content"); ?>

<br><br><br>
<form action="<?php echo e(url('/comment')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('POST'); ?>
    <?php echo csrf_field(); ?>
    <div class="container">
        <div class="row">
            <form action=""></form>
            <div class="col-lg-4">
                <label for="">Votre Nom et Prenom <span style="color:red;">*</span></label>
                <input name="nom" class="form-control" type="text" placeholder="Votre Nom et Prenom">
            </div>
            <div class="col-lg-4">
                <label for="">Votre Email <span style="color:red;">*</span></label>
                <input name="email" class="form-control" type="email" placeholder="Votre Email">
            </div>
            <div class="col-lg-4">
                <label for="">Votre Commentaire <span style="color:red;">*</span></label>
                <input name="comment" class="form-control" type="text" placeholder="Votre Commentaire">
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
                <img class="card-img-top user"  src="<?php echo e(asset('image/user.png')); ?>" alt="">
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
<footer class="footer ">
            <hr class="footer__horizontal-bar">
            <p class="footer__bottom-paragraph">&copy; Copyright 2020 <a href="#" style="color: #00aafe;font-weight:bold;">SEKKAF</a>. All Rights Reserved</p>
      </footer>



<script>
$(function (){
   $('[data-fleep = "tooltip"]').tooltip()
   })
   </script>
  <script>
    $(document).ready(function() {
      var $videoSrc = $("#video").attr("src");
      $('#myModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src',$videoSrc); 
      });
    });
  </script>

</body>
</html><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/layouts/mylayout.blade.php ENDPATH**/ ?>