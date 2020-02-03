<?php $__env->startSection("content"); ?>
<!--<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Modefier Module </h3>
  <form action="<?php echo e(url('/update/update-module')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
          
             <table>
             <tr>
             <td style="width:14%">Selectionner Module</td>
             <td>
             <select style="width:100%" class=" form-control" name="nom" required>
           <option value="">default </option>
               <?php $__currentLoopData = $mod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($m->nom_module); ?>"><?php echo e($m->nom_module); ?>->&nbsp;<?php echo e($m->nom_etabless); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select></td>
             </tr>
             <tr><td><br></td></tr>
                  <tr>
                     <td >Nom de modele </td>
                     <td><input  class=" form-control" name="nom_module" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td >  Nombre d'element  </td>
                     <td><input class=" form-control" name="num_element" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn form-control"  type="submit" value="Update" name="btn"></td>
                  </tr>
               </table>
</form>
  </div>
</div>
</div><!-- fin col--
</div><!-- fin row--
</div><!-- fin container-->

<br><br>

<style>
body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
</style>
<div class="container contact-form">
            <div class="contact-image">
                <img style="transform: rotate(0deg);" src="<?php echo e(asset('image/refresh.png')); ?>" alt=""/>
            </div>
            <form action="<?php echo e(url('/update/update-module')); ?>"  method="POST" enctype="multipart/form-data" >
              <?php echo method_field('POST'); ?>
               <?php echo csrf_field(); ?>
                <h3>Modefier Module</h3>
                  <div class="row">
                    <div class="col-md-12">
                  <div class="form-group tt">
                    <label for="">selectionner le Module</label> 
                    <select  class=" form-control" name="nom" required>
           <option value="">default </option>
               <?php $__currentLoopData = $mod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($m->nom_module); ?>"><?php echo e($m->nom_module); ?>->&nbsp;<?php echo e($m->nom_etabless); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             <br>
             <div class="form-group tt">
            <label for=""> Nom de Module </label>
            <input  class=" form-control" name="nom_module" type="text" required>
              </div>
              
              <div class="form-group tt">
                 <label for="">Nombre de l'element</label>
                 <input class=" form-control" name="num_element" type="text" required>
                         
              </div>

             <div class="form-group tt">
                            <input type="submit" name="btnSubmit" class="btnContact"  placeholder="image"  value="Modefier" />        
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

<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/update/update-module.blade.php ENDPATH**/ ?>