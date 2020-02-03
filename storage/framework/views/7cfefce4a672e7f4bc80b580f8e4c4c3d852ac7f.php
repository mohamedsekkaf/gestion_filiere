<?php $__env->startSection("content"); ?>
<!--<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Modefier Etablessemment </h3>
  <form action="<?php echo e(url('/update/update-etablessement')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
          
               <table>
               <tr>
               <td>Selectionner Nom de l'etablessement</td>
               <td>
               <select class="form-control" name="nom" required>
           <option value="">default </option>
               <?php $__currentLoopData = $etap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $et): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($et->nom_etablessement); ?>"><?php echo e($et->nom_etablessement); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             </td>
               </tr>
               <tr><td><br></td></tr>
                  <tr>
                     <td style="width:20%">Nom de l'etablissement </td>
                     <td style="width:100%"> <input class="input form-control" type="text" name="nom_etablessement" placeholder="Nom de l'etablissement" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td>Locatisation  </td>
                     <td><input class="input form-control" type="text" name="local_etablessement" placeholder="Localisation" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td><label for="">Selectioner image</label></td>
                       <td><input type="file" class="form-control" name="images" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn" type="submit" value="Update" name="btn"></td>
                  </tr>
               </table>
</form>
  </div>
</div>
</div><!-- fin co
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
            <form action="<?php echo e(url('/update/update-etablessement')); ?>"  method="POST" enctype="multipart/form-data" >
              <?php echo method_field('POST'); ?>
               <?php echo csrf_field(); ?>
                <h3>Modefier etablissement</h3>
                  <div class="row">
                    <div class="col-md-12">
                  <div class="form-group tt">
                    <label for="">selectionner le Element</label> 
                    <select class="form-control" name="nom" required>
           <option value="">default </option>
               <?php $__currentLoopData = $etap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $et): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($et->nom_etablessement); ?>"><?php echo e($et->nom_etablessement); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             <br>
             <div class="form-group tt">
            <label for=""> Nom de l'etablissement </label>
            <input class="input form-control" type="text" name="nom_etablessement" placeholder="Nom de l'etablissement" required>
              </div>
              
              <div class="form-group tt">
                 <label for="">Localisation</label>
                 <input class="input form-control" type="text" name="local_etablessement" placeholder="Localisation" required>
                         
              </div>

              <div class="form-group tt">
                 <label for="">Image</label>
              <input type="file" class="form-control" name="images" required>
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

<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/update/update-etablessement.blade.php ENDPATH**/ ?>