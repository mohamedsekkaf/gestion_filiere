<?php $__env->startSection("content"); ?>
<!--<div class="container">
<div class="row">
<div class="col-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Modefier Filiere </h3>
  <br>
  <form action="<?php echo e(url('/update/update-filiere')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
             <table>
             <tr>
             <td style="width:14%;">selectionner Filiere</td>
             <td style="width:70%">
             <select  name="nom" class=" form-control" required>
             <option value="">default </option>
               <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value=" <?php echo e($e->nom_filiere); ?>"><?php echo e($e->nom_filiere); ?>->&nbsp;<?php echo e($e->nom_etabless); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             </td>
             </tr>
             <tr><td><br></td></tr>
                  <tr>
                           <td>Nom de filiere </td>
                           <td><input class="form-control" name="nom_filiere" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nombre de Module  </td>
                           <td><input class=" form-control"  name="nummodel" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn" type="submit" value="Update" name="btn" class="form-control"></td>
                  </tr>
               </table>
</form>  
  </div>
</div>
</div><!-- fin col-
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
                <img style="transform: rotate(0deg);" src="<?php echo e(asset('image/refresh.png')); ?>" alt=""/>
            </div>
            <form action="<?php echo e(url('/update/update-filiere')); ?>"  method="POST" enctype="multipart/form-data" >
              <?php echo method_field('POST'); ?>
               <?php echo csrf_field(); ?>
                <h3>Modefier Filiere</h3>
                  <div class="row">
                    <div class="col-md-12">
                  <div class="form-group tt">
                    <label for="">selectionner le Element</label> 
                    <select  name="nom" class=" form-control" required>
             <option value="">default </option>
               <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value=" <?php echo e($e->nom_filiere); ?>"><?php echo e($e->nom_filiere); ?>->&nbsp;<?php echo e($e->nom_etabless); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             <br>
             <div class="form-group tt">
            <label for=""> Nom de filiere</label>
            <input class="form-control" name="nom_filiere" type="text" required>
              </div>
              
              <div class="form-group tt">
                 <label for="">Nombre de Module </label>
                 <input class=" form-control"  name="nummodel" type="text" required>
                         
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
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/update/update-filiere.blade.php ENDPATH**/ ?>