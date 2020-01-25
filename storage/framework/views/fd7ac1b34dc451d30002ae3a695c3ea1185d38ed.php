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
                <a class="nav-link" href="<?php echo e(url('/login')); ?>">Login</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(url('/register')); ?>">register</a>
            </li>
            <?php else: ?>
            <li class="nav-item active">
             <a href="http://127.0.0.1:8000/ajouter"><img src="<?php echo e(asset('image/user.png')); ?>" class=" img-user round " data-fleep="tooltip" data-placement="bottom" data-original-title="<?php echo e(Auth::user()->name); ?>"></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="http://127.0.0.1:8000/ajouter" ><?php echo e(Auth::user()->name); ?></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(url('/logout')); ?>">logout</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
 

<?php echo $__env->yieldContent("content"); ?>

<footer>
        <div class="footer2">
                    
        </div>
        <div class="footer1">
<p>desined by ... </p>
        </div>
</footer>

<script>
$(function (){
   $('[data-fleep = "tooltip"]').tooltip()
   })
   </script>
</body>
</html><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/layouts/mylayout.blade.php ENDPATH**/ ?>