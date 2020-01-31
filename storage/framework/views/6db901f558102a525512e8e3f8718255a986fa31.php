<?php $__env->startSection("content"); ?>
<!--
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Supprimer deplome  </h3>
  <form action="<?php echo e(url('/delete/delete-deplome')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
         <table>
          <tr>
          <td  style="width:20%" >selectionner Filiere</td>
          <td>
             <select style="width:60%" name="nom_deplome" class="form-control">
           <option value="0">default </option>
               <?php $__currentLoopData = $dep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($d->nom_deplome); ?>"><?php echo e($d->nom_deplome); ?>->&nbsp;<?php echo e($d->nom_etap); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             </td>
             </tr>
             <tr>
                <td></td>
                <td>
                  <input class="btn-primary btn" type="submit" value="Supprimer" name="btn">
                </td>
             </tr>
             </table>
</form>
  </div>
</div>
</div><!-- fin col
</div><!-- fin row
</div><!-- fin container-->
<br><br>

<style>
body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
</style>
<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form action="<?php echo e(url('/delete/delete-deplome')); ?>"  method="POST" enctype="multipart/form-data" >
              <?php echo method_field('POST'); ?>
               <?php echo csrf_field(); ?>
                <h3>Supprimer deplome</h3>
                  <div class="row">
                    <div class="col-md-12">
                  <div class="form-group tt">
                    <label for="">selectionner Deplome </label> 
          
                  <select name="nom_deplome" class="form-control">
                  <option value="0">default </option>
                      <?php $__currentLoopData = $dep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($d->nom_deplome); ?>"><?php echo e($d->nom_deplome); ?>->&nbsp;<?php echo e($d->nom_etap); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
             <br><br>
             <div class="form-group tt">
                            <input type="submit" name="btnSubmit" class="btnContact"  placeholder="image"  value="Supprimer" />        
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
</div>
</div>
</div>
<br><br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views//delete/delete-deplome.blade.php ENDPATH**/ ?>