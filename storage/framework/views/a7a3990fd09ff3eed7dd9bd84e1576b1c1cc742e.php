<?php $__env->startSection("content"); ?>
<!--<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier Filiere </h5>
  <form action="<?php echo e(url('/delete/delete-filiere')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
          <table>
          <tr>
          <td  style="width:20%" >selectionner Filiere</td>
          <td>
                        <select style="width:80%" name="id_filiere" class=" form-control">
                    <option value="0">default </option>
                        <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value=" <?php echo e($e->id_filiere); ?>"><?php echo e($e->nom_filiere); ?>->&nbsp;<?php echo e($e->nom_etabless); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </td>
            <tr><td><br></td></tr>
            <tr>
            <td></td>
             <td>
                    <input class="btn-primary btn" type="submit" value="Supprimer" name="btn" class="form-control">
             </td>
             </tr>
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
                <img style="transform: rotate(0deg);" src="<?php echo e(asset('image/rubbish.png')); ?>" alt="rocket_contact"/>
            </div>
            <form action="<?php echo e(url('/delete/delete-filiere')); ?>"  method="POST" enctype="multipart/form-data" >
              <?php echo method_field('POST'); ?>
               <?php echo csrf_field(); ?>
                <h3>Supprimer Filiere</h3>
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group tt ">
                    <label for="">selectionner l'etablissement</label>
                    <select name="" class="form-control" id="test" required>
                        <option value="">default </option>
                        <?php $__currentLoopData = $etap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($e->nom_etablessement); ?>"><?php echo e($e->nom_etablessement); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                  <div class="form-group tt">
                    <label for="">selectionner Filiere</label> 
          
                    <select  name="id_filiere" class=" form-control" required id="test1">
                    <option value="0">default </option>
                    <script>
                        var fil = <?php echo $file; ?> ;
                        var length2 = fil.length;
                        $(document).ready(function() {
                            $("#test").change(function() {
                                var m = $("#test option:selected").val();
                                for (i = 0; i < length2; i++) {
                                    $("#t").remove();
                                }
                                for (j = 0; j < length2; j++) {
                                    if (fil[j]["nom_etabless"] == m) {
                                        $("#test1").append('<option id="t" value="' + fil[j][
                                                "nom_filiere"
                                            ] + '">' + fil[j]["nom_filiere"] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                      <!--   <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value=" <?php echo e($e->id_filiere); ?>"><?php echo e($e->nom_filiere); ?>->&nbsp;<?php echo e($e->nom_etabless); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select> -->
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

<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views//delete/delete-filiere.blade.php ENDPATH**/ ?>