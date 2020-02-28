<?php $__env->startSection("content"); ?>
<br><br>
<style>
body {
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
</style>
<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="" />
    </div>
    <form action="<?php echo e(url('/ajouter/ajouter-semestre')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('POST'); ?>
        <?php echo csrf_field(); ?>
        <h3>Ajouter Semestre</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group tt">
                    <label for="">L'établissement</label>
                    <td style="text-align:center;">
                        <select class="form-control" name="nom_etabless" value="<?php echo e(old('nom_etabless')); ?>" id="etab">
                            <option value="">default </option>
                            <?php $__currentLoopData = $etab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($fil->nom_etablessement); ?>"> <?php echo e($fil->nom_etablessement); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <script>

                            </script>
                        </select>

                </div>
                <div class="form-group tt">
                    <label for="">filiere</label>
                    <select class="form-control" name="nom_file" value="<?php echo e(old('nom_file')); ?>" id="fil">
                        <option value="">default </option>
                        <script>
                        var fil = <?php echo $file; ?> ;
                        var length2 = fil.length;
                        $(document).ready(function() {
                            $("#etab").change(function() {
                                var m = $("#etab option:selected").val();
                                for (i = 0; i < length2; i++) {
                                    $("#tt").remove();
                                }
                                for (j = 0; j < length2; j++) {
                                    if (fil[j]["nom_etabless"] == m) {
                                        $("#fil").append('<option id="tt" value="' + fil[j][
                                                "nom_filiere"
                                            ] + '">' + fil[j]["nom_filiere"] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                        <!-- <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($model->nom_filiere); ?>"> <?php echo e($model->nom_filiere); ?>->&nbsp;<?php echo e($model->nom_etabless); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select> -->
                </div>
                <div class="form-group tt">
                    <label for="">Semestre</label>
                    <input type="text" class="form-control"  name="nom_s" value="<?php echo e(old('nom_s')); ?>"
                        placeholder="Nom de Semestre" id="" />
                </div>



                <div class="form-group tt">
                    <input type="submit" name="btnSubmit" class="btnContact" placeholder="image" value="Ajouter" />
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
<script>

</script>

<br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/mylayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/ajouter/ajouter-semestre.blade.php ENDPATH**/ ?>