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
            <form action="<?php echo e(url('/ajouter/ajouter-deplome')); ?>"  method="POST" enctype="multipart/form-data" >
              <?php echo method_field('POST'); ?>
               <?php echo csrf_field(); ?>
                <h3>Ajouter Deplome</h3>
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group tt">
                        <label for="">Nom de deplome</label>
                            <input type="text"   class="form-control text_center"  name="nom_deplome" value="<?php echo e(old('nom_etablessement')); ?>" placeholder="Nom de deplome" id="nom"  />
                        </div>
                        <div class="form-group tt">
                        <label for="">Type de deplome</label>
                            <input type="text"   class="form-control text_center"  name="type_deplome" value="<?php echo e(old('local_etablessement')); ?>" placeholder="type" id="local"/>
                        </div>
                        <div class="form-group tt">
                            <label for="">Durée</label>
                        <select class="form-control text_center" name="duree_deplome" id="" required>
                           <option value="2 ans">2 ans </option>
                           <option value="3 ans">3 ans</option>
                           <option value="4 ans">4 ans </option>
                           <option value="5 ans">5 ans </option>
                           <option value="6 ans">6 ans </option>
                           <option value="7 ans">7 ans </option>
                           <option value="8 ans">8 ans </option>
                           <option value="9 ans">9 ans </option>
                           <option value="10 ans">10 ans </option>
                        </select>
                        </div>
                        <div class="form-group tt">
                           <label for=""> Etalessement</label>
                        <select class="form-control text_center" name="nom_etap" id="" required>
                           <option value="">default</option>
                           <?php $__currentLoopData = $etab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option  value="<?php echo e($dep->nom_etablessement); ?>"><?php echo e($dep->nom_etablessement); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div>
                        <div class="form-group tt">
                            <input type="submit"  name="btnSubmit" class="btnContact"    value="Ajouter" />
                        </div>
                    </div>
                    
               
               <!--  <div class="col-12">
               <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="alert alert-danger mt-5">
                     <?php echo e($err); ?>

                     </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div> -->
     
            </form>
</div>
</div>
<br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/ajouter/ajouter-deplome.blade.php ENDPATH**/ ?>