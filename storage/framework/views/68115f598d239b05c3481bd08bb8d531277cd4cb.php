<?php $__env->startSection("content"); ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier Element</h5>
  <form action="<?php echo e(url('/update-element')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
             <table>
             <tr>
             <td style="width:20%">Selectionner Element</td>
             <td>
             <select style="width:100%" name="id_element" class="form-control">
           <option value="0">default </option>
               <?php $__currentLoopData = $elem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value=" <?php echo e($e->id_element); ?>"><?php echo e($e->nom_element); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             </td>
             </tr>
             <tr><td><br></td></tr>
                  <tr>
                     <td style="width:20%">Nom de l'element </td>
                     <td style="width:100%"><input class="form-control" name="nom_element" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary" type="submit" value="Insert" name=""></td>
                  </tr>
               </table>
</form>
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/update-element.blade.php ENDPATH**/ ?>