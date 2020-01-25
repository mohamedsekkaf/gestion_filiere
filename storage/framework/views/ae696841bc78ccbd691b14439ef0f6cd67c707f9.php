<?php $__env->startSection('content'); ?>

<div class="container">
              <div class="head d-flex justify-content-center">
       <div class="row" style="display: block!important;">
       <a href="#"><img class="circle" src="<?php echo e(asset('image/school.png')); ?>" data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Etablissement" data-toggle="modal" data-target="#etablissement" /></a>
       <a href="#"> <img class="circle" src="<?php echo e(asset('image/school.png')); ?>" data-toggle="modal" data-target="#filiere"  data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Filiere"/></a>
       <a href="#"><img class="circle" src="<?php echo e(asset('image/module.png')); ?>" data-toggle="modal" data-target="#modele"   data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Modele"/></a>
       <img class="circle" src="<?php echo e(asset('image/cour.png')); ?>" data-toggle="modal" data-target="#element"    data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Element"/>
       <img class="circle" src="<?php echo e(asset('image/diploma1.png')); ?>" data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Deplome" data-toggle="modal" data-target="#deplome" />

       </div>
       </div><!--fin class hread -->
        
</div><!-- fi container -->

<!--00000============================================================0000000-->
<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="etablissement">
    <div class="modal-dialog">
      <div class="modal-content">
      <form action="" method="POST">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title ">Ajouter un Eteblissement</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
               <table>
                  <tr>
                     <td>Nom de l'etablissement </td>
                     <td><input class="input" type="text" placeholder="Nom de l'etablissement"></td>
                  </tr>
                  <tr><td> <br>     </td></tr>
                  <tr>
                     <td>Locatisation  </td>
                     <td><input class="input" type="text" placeholder="Localisation"></td>
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
      <form action="" method="POST">
      <?php echo csrf_field(); ?>
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter un Filiere</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
               <table>
                  <tr>
                           <td>Nom de filiere </td>
                           <td><input class="input"  type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nombre de filiere  </td>
                           <td><input class="input"  type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nom de l'etablissement </td>
                           <td style="text-align:center;">
                              <select name="" id="">
                                 <option value="">default </option>
                                 <?php $__currentLoopData = $etab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($fil->id_etablessement); ?>"><?php echo e($fil->nom_etablessement); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                              <!--<select name="" id="">
                                 <option value="">default</option>
                              </select>-->
                           </td>
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
      <form action="" method="POST">
      <?php echo csrf_field(); ?>
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter un modele</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
               <table>
                  <tr>
                     <td>Nom de modele </td>
                     <td><input type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> Nombre d'element  </td>
                     <td><input type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Non de filiere </td>
                     <td>
                        <select name="" id="">
                           <option value="">default </option>
                        </select>
                        <!--<select name="" id="">
                           <option value="">default</option>
                        </select>-->
                     </td>
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
      <form action="" method="POST">
      <?php echo csrf_field(); ?>
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter un element</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
               <table>
                  <tr>
                     <td>Nom de modele </td>
                     <td><input type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> Nombre d'element  </td>
                     <td><input type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Non de filiere </td>
                     <td>
                        <select name="" id="">
                           <option value="">default </option>
                        </select>
                        <!--<select name="" id="">
                           <option value="">default</option>
                        </select>-->
                     </td>
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
      <form action="" method="POST">
      <?php echo csrf_field(); ?>
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter un Deplome</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
               <table>
                  <tr>
                     <td>Nom de Deplome </td>
                     <td><input type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> Type de Deplome </td>
                     <td><input type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td>Nom de l'etablissement </td>
                     <td><input type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Durée de Deplome</td>
                     <td>
                        <select name="" id="">
                           <option value="">2 ans </option>
                           <option value=""> 3 ans</option>
                           <option value="">4 ans </option>
                           <option value="">5 ans </option>
                           <option value="">6 ans </option>
                           <option value="">7 ans </option>
                           <option value="">8 ans </option>
                           <option value="">9 ans </option>
                           <option value="">10 ans </option>
                        </select>
                        <!--<select name="" id="">
                           <option value="">default</option>
                        </select>-->
                     </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                    <td>id de etablissement</td>
                    <td>
                      <select name="" id="">
                           <option value="">default</option>
                        </select>
                    </td>
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

<?php echo $__env->make('layouts/mylayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/testappleid/Desktop/gestion/test/resources/views//ajouter.blade.php ENDPATH**/ ?>