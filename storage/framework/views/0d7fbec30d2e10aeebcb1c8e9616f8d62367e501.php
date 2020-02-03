<?php $__env->startSection("content"); ?>
<!--<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Modefier Semestre </h3>
  <form action="<?php echo e(url('/update/update-semestre')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
         <table>
                    <tr>
                    <td>Selectioner Semestre</td>
                    <td>
                    <select class="form-control" name="nom_sold" id="" required>
                           <option value="">default </option>
                           <?php $__currentLoopData = $semestre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($s->nom_s); ?>"><?php echo e($s->nom_s); ?> ->&nbsp;<?php echo e($s->nom_etabless); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </td>
                    </tr>
                    <tr><td><br></td></tr>
                  <tr>
                     <td style="width:14%">Nom semestre </td>
                     <td style="width:100%"><input class="form-control" name="nom_snew" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Non de filiere </td>
                     <td>
                        <select class="form-control" name="nom_fil" id="" required>
                           <option value="">default </option>
                           <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($model->nom_filiere); ?>"><?php echo e($model->nom_filiere); ?>->&nbsp;<?php echo e($model->nom_etabless); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                     </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nom de l'Etablissement </td>
                           <td style="text-align:center;">
                              <select class="form-control" name="nom_etabless" id="" required>
                                 <option value="">default </option>
                                 <?php $__currentLoopData = $etap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($fil->nom_etablessement); ?>"><?php echo e($fil->nom_etablessement); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                           </td>
                           </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input  class="btn-primary btn" type="submit" value="Insert" name="btn"></td>
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
            <form action="<?php echo e(url('/update/update-semestre')); ?>"  method="POST" enctype="multipart/form-data" >
              <?php echo method_field('POST'); ?>
               <?php echo csrf_field(); ?>
                <h3>Modefier Semestre</h3>
                  <div class="row">
                    <div class="col-md-12">
                  <div class="form-group tt">
                    <label for="">Selectionner Semestre</label> 
                    <select class="form-control" name="nom_sold" id="" required>
                           <option value="">default </option>
                           <?php $__currentLoopData = $semestre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($s->nom_s); ?>"><?php echo e($s->nom_s); ?> ->&nbsp;<?php echo e($s->nom_etabless); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
             <br>
             <div class="form-group tt">
            <label for=""> Nom de Semestre </label>
            <input class="form-control" name="nom_snew" type="text" required>
              </div>
              
              <div class="form-group tt">
                 <label for="">Nombre de Filiere</label>
                 <select class="form-control" name="nom_fil" id="" required>
                           <option value="">default </option>
                           <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($model->nom_filiere); ?>"><?php echo e($model->nom_filiere); ?>->&nbsp;<?php echo e($model->nom_etabless); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
              </div>
  
              <div class="form-group tt">
                 <label for="">Nombre de l'établissement</label>
                 <select class="form-control" name="nom_etabless" id="" required>
                                 <option value="">default </option>
                                 <?php $__currentLoopData = $etap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($fil->nom_etablessement); ?>"><?php echo e($fil->nom_etablessement); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
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
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/update/update-semestre.blade.php ENDPATH**/ ?>