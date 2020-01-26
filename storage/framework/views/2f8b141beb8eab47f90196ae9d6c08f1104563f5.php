<?php $__env->startSection("content"); ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Supprimer Element</h3>
  <form action="<?php echo e(url('/delete/delete-semestre')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
         <table>
          <tr>
          <td  style="width:20%" >selectionner Filiere</td>
          <td>
          <select style="width:60%" name="nom_s" class="form-control" required>
           <option value="">default </option>
               <?php $__currentLoopData = $semestre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value=" <?php echo e($e->nom_s); ?>"><?php echo e($e->nom_s); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             </td>
            <tr><td><br></td></tr>
            <tr>
             <td>
                    <input class="btn-primary btn" type="submit" value="Supprimer" name="btn" class="form-control">
             </td>
             </tr>
           </tr>

           </table>
                 
</form>
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views//delete/delete-semestre.blade.php ENDPATH**/ ?>