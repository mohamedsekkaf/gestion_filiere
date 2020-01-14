@extends('layouts/mylayout')

@section('content')

<div class="container">
              <div class="head d-flex justify-content-center">
       <div class="row" style="display: block!important;">
       <a href="#"><img class="circle" src="{{ asset('image/school.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Etablissement" data-toggle="modal" data-target="#etablissement" /></a>
       <a href="#"> <img class="circle" src="{{ asset('image/school.png') }}" data-toggle="modal" data-target="#filiere"  data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Filiere"/></a>
       <a href="#"><img class="circle" src="{{ asset('image/module.png') }}" data-toggle="modal" data-target="#modele"   data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Modele"/></a>
       <img class="circle" src="{{ asset('image/cour.png') }}" data-toggle="modal" data-target="#element"    data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Element"/>
       <img class="circle" src="{{ asset('image/diploma1.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Deplome" data-toggle="modal" data-target="#deplome" />

       </div>
       </div><!--fin class hread -->
</div><!-- fi container -->
<br>
<div class="container">
              <div class="head d-flex justify-content-center">
       <div class="row" style="display: block!important;">
       <a href="{{asset('/update-etablessement')}}"><img class="circle" src="{{ asset('image/school.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Etablissement" data-toggle="modal" data-target="" /></a>
       <a href="{{asset('/update-filiere')}}"> <img class="circle" src="{{ asset('image/school.png') }}" data-toggle="modal" data-target=""  data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Filiere"/></a>
       <a href="{{asset('/update-module')}}"><img class="circle" src="{{ asset('image/module.png') }}" data-toggle="modal" data-target=""   data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Modele"/></a>
      <a href="{{asset('/update-element')}}"><img class="circle" src="{{ asset('image/cour.png') }}" data-toggle="modal" data-target=""    data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Element"/></a> 
       <a href="{{asset('/update-deplome')}}"><img class="circle" src="{{ asset('image/diploma1.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Deplome" data-toggle="modal" data-target=""/></a> 

       </div>
       </div><!--fin class hread -->
</div><!-- fi container -->
<br>
<div class="container">
              <div class="head d-flex justify-content-center">
       <div class="row" style="display: block!important;">
       <a href="{{asset('/delete/delete-etablessement')}}"><img class="circle" src="{{ asset('image/school.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer Etablissement" data-toggle="modal" data-target="" /></a>
       <a href="{{asset('/delete/delete-filiere')}}"> <img class="circle" src="{{ asset('image/school.png') }}" data-toggle="modal" data-target=""  data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Filiere"/></a>
       <a href="{{asset('/delete/delete-module')}}"><img class="circle" src="{{ asset('image/module.png') }}" data-toggle="modal" data-target=""   data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Modele"/></a>
      <a href="{{asset('/delete/delete-element')}}"><img class="circle" src="{{ asset('image/cour.png') }}" data-toggle="modal" data-target=""  data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Element"/></a> 
       <a href="{{asset('/delete/delete-deplome')}}"><img class="circle" src="{{ asset('image/diploma1.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Deplome" data-toggle="modal" data-target=""/></a> 

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
        <div class="modal-header">
          <h4 class="modal-title ">Ajouter un Eteblissement</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <form action="{{ url('/ajouter') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
               <table>
                  <tr>
                     <td>Nom de l'etablissement </td>
                     <td><input class="input" type="text" name="nom_etablessement" placeholder="Nom de l'etablissement"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td>Locatisation  </td>
                     <td><input class="input" type="text" name="local_etablessement" placeholder="Localisation"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td><label for="">File Select</label></td>
                       <td><input type="file" class="form-control" name="images"></td>
                  </tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary" type="submit" value="Insert" name="btn"></td>
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
      <form action="{{ url('/insertetabfil') }}" method="POST">
        @method('POST')
         @csrf
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
                           <td><input class="input" name="nom_filiere" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nombre de Module  </td>
                           <td><input class="input"  name="nummodel" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nom de l'etablissement </td>
                           <td style="text-align:center;">
                              <select name="id_etabless" id="">
                                 <option value="">default </option>
                                 @foreach($etab as $fil)
                                 <option value="{{ $fil->id_etablessement }}">{{ $fil->nom_etablessement }}</option>
                                 @endforeach
                              </select>
                              <!--<select name="" id="">
                                 <option value="">default</option>
                              </select>-->
                           </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary" type="submit" value="Insert" name="btn"></td>
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
      <form action="{{ url('/insertetabmod') }}" method="POST">
        @method('POST')
         @csrf
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
                     <td><input name="nom_module" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> Nombre d'element  </td>
                     <td><input name="num_element" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Non de filiere </td>
                     <td>
                        <select name="nom_fil" id="">
                           <option value="">default </option>
                           @foreach($file as $model)
                           <option value="{{ $model->nom_filiere }}">{{ $model->nom_filiere }}</option>
                           @endforeach
                        </select>
                        <!--<select name="" id="">
                           <option value="">default</option>
                        </select>-->
                     </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary" type="submit" value="Insert" name="btn"></td>
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
      <form action="{{ url('/insertetabelem') }}" method="POST">
        @method('POST')
         @csrf
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter un element</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
               <table>
                  <tr>
                     <td>Nom de l'element </td>
                     <td><input name="nom_element" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Non de Module </td>
                     <td>
                        <select name="nom_mod" id="">
                           <option value="">default </option>
                           @foreach($mod as $modele)
                           <option value="{{ $modele->nom_module }}">{{ $modele->nom_module }}</option>
                           @endforeach
                        </select>
                        <!--<select name="" id="">
                           <option value="">default</option>
                        </select>-->
                     </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary" type="submit" value="Insert" name=""></td>
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
      @csrf
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
                     <td><input name="nom_deplome" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> Type de Deplome </td>
                     <td><input name="type_deplome" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Durée de Deplome</td>
                     <td>
                        <select name="duree_deplome" id="">
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
                     <td>Nom de l'etablissement </td>
                     <td>
                     <select name="id_etap" id="">
                           <option value="">default</option>
                           @foreach($etab as $dep)
                          <option name="id_etap" value="{{$dep->id_etablessement}}">{{ $dep->nom_etablessement }}</option>
                           @endforeach
                        </select>
                     </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary" type="submit" value="Insert" name="btn"></td>
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
@endsection
