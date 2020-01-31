<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
<div class="col-12">
<h3 style="text-align:center;"> Ajouter Etablessement ou Filiere ou <br> Module ou Element ou Diplôme </h3>
</div></div>
</div>
<div class="container">
              <div class="head d-flex justify-content-center">
       <div class="row" style="display: block!important;">
       <a href="#"><img class="circle" src="<?php echo e(asset('image/school.png')); ?>" data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Etablissement" data-toggle="modal" data-target="#etablissement" /></a>
       <a href="#"> <img class="circle" src="<?php echo e(asset('image/filiere.png')); ?>" data-toggle="modal" data-target="#filiere"  data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Filiere"/></a>
       <a href="#"> <img class="circle" src="<?php echo e(asset('image/semestre.png')); ?>" data-toggle="modal" data-target="#semestre"  data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter semestre"/></a>
       <a href="#"><img class="circle" src="<?php echo e(asset('image/module.png')); ?>" data-toggle="modal" data-target="#modele"   data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Modele"/></a>
       <img class="circle" src="<?php echo e(asset('image/cour.png')); ?>" data-toggle="modal" data-target="#element"    data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Element"/>
       <img class="circle" src="<?php echo e(asset('image/diploma1.png')); ?>" data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Diplôme" data-toggle="modal" data-target="#deplome" />

       </div>
       </div><!--fin class hread -->
</div><!-- fi container -->
<br>
<div class="container">
<div class="row">
<div class="col-12">
<h3 style="text-align:center;"> Modifier Etablessement ou Filiere ou <br> Module ou Element ou Diplôme </h3>
</div></div>
</div>
<div class="container">
              <div class="head d-flex justify-content-center">
       <div class="row" style="display: block!important;">
       <a href="<?php echo e(asset('/update/update-etablessement')); ?>"><img class="circle" src="<?php echo e(asset('image/school.png')); ?>" data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Etablissement" data-toggle="modal" data-target="" /></a>
       <a href="<?php echo e(asset('/update/update-filiere')); ?>"> <img class="circle" src="<?php echo e(asset('image/filiere.png')); ?>" data-toggle="modal" data-target=""  data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Filiere"/></a>
       <a href="<?php echo e(asset('/update/update-semestre')); ?>"> <img class="circle" src="<?php echo e(asset('image/semestre.png')); ?>" data-toggle="modal"   data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier semestre"/></a>
       <a href="<?php echo e(asset('/update/update-module')); ?>"><img class="circle" src="<?php echo e(asset('image/module.png')); ?>" data-toggle="modal" data-target=""   data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Modele"/></a>
      <a href="<?php echo e(asset('/update/update-element')); ?>"><img class="circle" src="<?php echo e(asset('image/cour.png')); ?>" data-toggle="modal" data-target=""    data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Element"/></a> 
       <a href="<?php echo e(asset('/update/update-deplome')); ?>"><img class="circle" src="<?php echo e(asset('image/diploma1.png')); ?>" data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Diplôme" data-toggle="modal" data-target=""/></a> 

       </div>
       </div><!--fin class hread -->
</div><!-- fi container -->
<br>
<div class="container">
<div class="row">
<div class="col-12">
<h3 style="text-align:center;"> Supprimer Etablessement ou Filiere ou <br> Module ou Element ou Diplôme </h3>
</div></div>
</div>
<div class="container">
              <div class="head d-flex justify-content-center">
       <div class="row" style="display: block!important;">
       <a href="<?php echo e(asset('/delete/delete-etablessement')); ?>"><img class="circle" src="<?php echo e(asset('image/school.png')); ?>" data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer Etablissement" data-toggle="modal" data-target="" /></a>
       <a href="<?php echo e(asset('/delete/delete-filiere')); ?>"> <img class="circle" src="<?php echo e(asset('image/filiere.png')); ?>" data-toggle="modal" data-target=""  data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Filiere"/></a>
       <a href="<?php echo e(asset('/delete/delete-semestre')); ?>"> <img class="circle" src="<?php echo e(asset('image/semestre.png')); ?>" data-toggle="modal"   data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer semestre"/></a>
       <a href="<?php echo e(asset('/delete/delete-module')); ?>"><img class="circle" src="<?php echo e(asset('image/module.png')); ?>" data-toggle="modal" data-target=""   data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Modele"/></a>
      <a href="<?php echo e(asset('/delete/delete-element')); ?>"><img class="circle" src="<?php echo e(asset('image/cour.png')); ?>" data-toggle="modal" data-target=""  data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Element"/></a> 
       <a href="<?php echo e(asset('/delete/delete-deplome')); ?>"><img class="circle" src="<?php echo e(asset('image/diploma1.png')); ?>" data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Diplôme" data-toggle="modal" data-target=""/></a> 

       </div>
       </div><!--fin class hread -->
</div><!-- fi container -->


<!--00000============================================================0000000-->

<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="etablissement">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header heade">
          <h4 class="modal-title center">Ajouter un Eteblissement</h4>
          <button type="button" class="close m-0 close-test" data-dismiss="modal" >&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <form action="<?php echo e(url('/ajouter')); ?>"  method="POST" enctype="multipart/form-data">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
               <table>
                  <tr>
                     <td>Nom de l'Etablissement </td>
                     <td><input class="form-control"  type="text" name="nom_etablessement" placeholder="Nom de l'etablissement" id="nom" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td>Locatisation  </td>
                     <td><input class="form-control" type="text" name="local_etablessement" placeholder="Localisation" id="local" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td><label for="">Selectioner image</label></td>
                       <td><input type="file" class="form-control" name="images" required></td>
                  </tr>
                  <tr>
                  <td><br></td>
                  </tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn" type="submit" value="Insert" name="btn"></td>
                  </tr>
               </table>
        </div>
         </form>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 000000==========================================================00000--->


<!--00000============================================================0000000-->
<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="filiere">
    <div class="modal-dialog">
      <div class="modal-content">
      <form action="<?php echo e(url('/insertetabfil')); ?>" method="POST">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
        <!-- Modal Header -->
        <div class="modal-header heade">
          <h4 class="modal-title center">Ajouter un Filiere</h4>
          <button type="button" class="close close-test" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
               <table>
                  <tr>
                           <td>Nom de filiere </td>
                           <td><input class="form-control" name="nom_filiere" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nombre de Module  </td>
                           <td><input class="form-control"  name="nummodel" type="number" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nom de l'Etablissement </td>
                           <td style="text-align:center;">
                              <select class="form-control" name="nom_etabless" id="" required>
                                 <option value="">default </option>
                                 <?php $__currentLoopData = $etab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($fil->nom_etablessement); ?>"><?php echo e($fil->nom_etablessement); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                              <!--<select name="" id="">
                                 <option value="">default</option>
                              </select>-->
                           </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn" type="submit" value="Insert" name="btn"></td>
                  </tr>
               </table>
        </div>
        </form>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 000000==========================================================00000--->


<!--00000============================================================0000000-->
<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="semestre">
    <div class="modal-dialog">
      <div class="modal-content">
      <form action="<?php echo e(url('/insertetabsemestre')); ?>" method="POST">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
        <!-- Modal Header -->
        <div class="modal-header heade">
          <h4 class="modal-title center">Ajouter un Semestre</h4>
          <button type="button" class="close close-test" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
               <table>
                  <tr>
                     <td>Nom semestre </td>
                     <td><input class="form-control" name="nom_s" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Non de filiere </td>
                     <td>
                        <select class="form-control" name="nom_fil" id="" required>
                           <option value="">default </option>
                           <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($model->nom_filiere); ?>"> <?php echo e($model->nom_filiere); ?>->&nbsp;<?php echo e($model->nom_etabless); ?></option>
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
                                 <?php $__currentLoopData = $etab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($fil->nom_etablessement); ?>"> <?php echo e($fil->nom_etablessement); ?></option>
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
        </div>
        </form>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 000000==========================================================00000--->
<!--00000============================================================0000000-->
<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="modele">
    <div class="modal-dialog">
      <div class="modal-content">
      <form action="<?php echo e(url('/insertetabmod')); ?>" method="POST">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
        <!-- Modal Header -->
        <div class="modal-header heade">
          <h4 class="modal-title center">Ajouter un modele</h4>
          <button type="button" class="close close-test" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
               <table>
                  <tr>
                     <td>Nom de modele </td>
                     <td><input class="form-control" name="nom_module" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> Nombre d'element  </td>
                     <td><input class="form-control" name="num_element" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td>Nom de semestre</td>
                  <td>
                  <select class="form-control" name="nom_se" id="" required>
                           <option value="">default </option>
                           <?php $__currentLoopData = $semestre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($model->nom_s); ?>">S<?php echo e($model->nom_s); ?>->&nbsp; <?php echo e($model->nom_etabless); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </td>
                  </tr>
                  
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Non de filiere </td>
                     <td>
                        <select class="form-control" name="nom_fil" id="" required>
                           <option value="">default </option>
                           <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($model->nom_filiere); ?>"><?php echo e($model->nom_filiere); ?>->&nbsp; <?php echo e($model->nom_etabless); ?></option>
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
                                 <?php $__currentLoopData = $etab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
        </div>
        </form>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 000000==========================================================00000--->

<!--00000============================================================0000000-->
<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="element">
    <div class="modal-dialog">
      <div class="modal-content">
      <form action="<?php echo e(url('/insertetabelem')); ?>" method="POST">
        <?php echo method_field('POST'); ?>
         <?php echo csrf_field(); ?>
        <!-- Modal Header -->
        <div class="modal-header heade">
          <h4 class="modal-title center">Ajouter un Element</h4>
          <button type="button" class="close close-test" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
               <table>
                  <tr>
                     <td>Nom de l'element </td>
                     <td><input class="form-control" name="nom_element" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td>L'horaire de L'Element </td>
                     <td><input class="form-control" name="horaire_element" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Non de Module </td>
                     <td>
                        <select class="form-control" name="nom_mod" id="" required>
                           <option value="">default </option>
                           <?php $__currentLoopData = $mod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modele): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($modele->nom_module); ?>"><?php echo e($modele->nom_module); ?>->&nbsp; <?php echo e($modele->nom_etabless); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                     </td>
                  </tr>
                  <tr>
                  <td><br></td>
                  </tr>
                  <tr>
                           <td> Nom de l'Etablissement </td>
                           <td style="text-align:center;">
                              <select class="form-control" name="nom_etabless" id="" required>
                                 <option value="">default </option>
                                 <?php $__currentLoopData = $etab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($fil->nom_etablessement); ?>"><?php echo e($fil->nom_etablessement); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                           </td>
                           </tr>
                  <tr><td><br></td></tr>
                  
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn" type="submit" value="Insert" name=""></td>
                  </tr>
               </table>
        </div>
        </form>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 000000==========================================================00000--->


<!--00000============================================================0000000-->
<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="deplome">
    <div class="modal-dialog">
      <div class="modal-content">
      <form action="/insertetabdeplome" method="POST">
      <?php echo csrf_field(); ?>
        <!-- Modal Header -->
        <div class="modal-header heade">
          <h4 class="modal-title center">Ajouter un Deplome</h4>
          <button type="button" class="close close-test" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
               <table>
                  <tr>
                     <td>Nom de Deplome </td>
                     <td><input class="form-control" name="nom_deplome" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> Type de Deplome </td>
                     <td><input class="form-control" name="type_deplome" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Durée de Deplome</td>
                     <td>
                        <select class="form-control" name="duree_deplome" id="" required>
                           <option value="2 ans">2 ans </option>
                           <option value="3 ans"> 3 ans</option>
                           <option value="4 ans">4 ans </option>
                           <option value="5 ans">5 ans </option>
                           <option value="6 ans">6 ans </option>
                           <option value="7 ans">7 ans </option>
                           <option value="8 ans">8 ans </option>
                           <option value="9 ans">9 ans </option>
                           <option value="10 ans">10 ans </option>
                        </select>
                        <!--<select name="" id="">
                           <option value="">default</option>
                        </select>-->
                     </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td>Nom de l'Etablissement </td>
                     <td>
                     <select class="form-control" name="nom_etap" id="" required>
                           <option value="">default</option>
                           <?php $__currentLoopData = $etab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option  value="<?php echo e($dep->nom_etablessement); ?>"><?php echo e($dep->nom_etablessement); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                     </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn" type="submit" value="Insert" name="btn"></td>
                  </tr>
               </table>
        </div>
        </form>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 000000==========================================================00000--->




<script>
$(function (){
   $('[data-fleep = "tooltip"]').tooltip()
   })

   </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/mylayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Meccanicon/my /gestion/test/resources/views/ajouter.blade.php ENDPATH**/ ?>