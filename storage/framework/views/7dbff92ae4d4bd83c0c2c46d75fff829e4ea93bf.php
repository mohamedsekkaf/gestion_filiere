<?php $__env->startSection("content"); ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier Module </h5>
  <form action="<?php echo e(url('/update-module')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
          
             <table>
             <tr>
             <td style="width:20vh">Selectionner Module</td>
             <td>
             <select  style="width:60vh" class=" form-control" name="id_module" >
           <option value="9">default </option>
               <?php $__currentLoopData = $mod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($m->id_module); ?>"><?php echo e($m->nom_module); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             </td>
             <td>
             <select style="width:60%" class=" form-control" name="nom" >
           <option value="9">default </option>
               <?php $__currentLoopData = $mod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($m->nom_module); ?>"><?php echo e($m->nom_module); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select></td>
             </tr>
                  <tr>
                     <td style="width:20%">Nom de modele </td>
                     <td><input style="width:60%" class=" form-control" name="nom_module" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td style="width:20%">  Nombre d'element  </td>
                     <td><input style="width:60%" class=" form-control" name="num_element" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary" class=" form-control" type="submit" value="Insert" name="btn"></td>
                  </tr>
               </table>
</form>
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/update-module.blade.php ENDPATH**/ ?>