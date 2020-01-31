<?php $__env->startSection("content"); ?>
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
            <form action="<?php echo e(url('/ajouter/ajouter-filiere')); ?>"  method="POST" enctype="multipart/form-data" >
              <?php echo method_field('POST'); ?>
               <?php echo csrf_field(); ?>
                <h3>Ajouter Filiere</h3>
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text"   class="form-control" name="nom_filiere" type="text"  value="<?php echo e(old('nom_filiere')); ?>" placeholder="Nom de filiere" id="nom"  />
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control"  name="nummodel" type="number" value="<?php echo e(old('nummodel')); ?>" placeholder="Nombre de module" id="local"/>
                        </div>
                        <div class="form-group">
                        <select class="form-control" name="nom_etabless" value="<?php echo e(old('nom_etabless')); ?>"id="">
                                 <option value="">default </option>
                                 <?php $__currentLoopData = $etab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($fil->nom_etablessement); ?>"><?php echo e($fil->nom_etablessement); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact"  placeholder="image"  value="Ajouter" />
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/ajouter/ajouter-filiere.blade.php ENDPATH**/ ?>