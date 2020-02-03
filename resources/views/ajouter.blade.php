@extends('layouts/mylayout')

@section('content')
<!--
<div class="container">
<div class="row">
<div class="col-12">
<h3 style="text-align:center;"> Ajouter Etablissement ou Filiere ou <br> Module ou Element ou Diplôme </h3>
</div></div>
</div>
<div class="container">
       <div class="head d-flex justify-content-center">
       <div class="row" style="display: block!important;">
       <a href="{{asset('/ajouter/ajouter-etablessement')}}"><img class="circle" src="{{ asset('image/school.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Etablissement" data-toggle="modal"  /></a>
       <a href="{{asset('/ajouter/ajouter-filiere')}}"> <img class="circle" src="{{ asset('image/filiere.png') }}" data-toggle="modal"  data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Filiere"/></a>
       <a href="{{asset('/ajouter/ajouter-semestre')}}"> <img class="circle" src="{{ asset('image/semestre.png') }}" data-toggle="modal"   data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter semestre"/></a>
       <a href="{{asset('/ajouter/ajouter-module')}}"><img class="circle" src="{{ asset('image/module.png') }}" data-toggle="modal"   data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Modele"/></a>
       <a href="{{asset('/ajouter/ajouter-element')}}"><img class="circle" src="{{ asset('image/cour.png') }}" data-toggle="modal"    data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Element"/></a>
       <a href="{{asset('/ajouter/ajouter-deplome')}}"><img class="circle" src="{{ asset('image/diploma1.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Ajouter Diplôme" data-toggle="modal"  /></a>
       <!-- data-target="#deplome" --
       </div>
       </div><!--fin class hread --
</div><!-- fi container --
<br>
<div class="container">
<div class="row">
<div class="col-12">
<h3 style="text-align:center;"> Modifier Etablissement ou Filiere ou <br> Module ou Element ou Diplôme </h3>
</div></div>
</div>
<div class="container">
              <div class="head d-flex justify-content-center">
       <div class="row" style="display: block!important;">
       <a href="{{asset('/update/update-etablessement')}}"><img class="circle" src="{{ asset('image/school.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Etablissement" data-toggle="modal" data-target="" /></a>
       <a href="{{asset('/update/update-filiere')}}"> <img class="circle" src="{{ asset('image/filiere.png') }}" data-toggle="modal" data-target=""  data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Filiere"/></a>
       <a href="{{asset('/update/update-semestre')}}"> <img class="circle" src="{{ asset('image/semestre.png') }}" data-toggle="modal"   data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier semestre"/></a>
       <a href="{{asset('/update/update-module')}}"><img class="circle" src="{{ asset('image/module.png') }}" data-toggle="modal" data-target=""   data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Modele"/></a>
      <a href="{{asset('/update/update-element')}}"><img class="circle" src="{{ asset('image/cour.png') }}" data-toggle="modal" data-target=""    data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Element"/></a> 
       <a href="{{asset('/update/update-deplome')}}"><img class="circle" src="{{ asset('image/diploma1.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Diplôme" data-toggle="modal" data-target=""/></a> 

       </div>
       </div><!--fin class hread --
</div><!-- fi container --
<br>
<div class="container">
<div class="row">
<div class="col-12">
<h3 style="text-align:center;"> Supprimer Etablissement ou Filiere ou <br> Module ou Element ou Diplôme </h3>
</div></div>
</div>
<div class="container">
              <div class="head d-flex justify-content-center">
       <div class="row" style="display: block!important;">
       <a href="{{asset('/delete/delete-etablessement')}}"><img class="circle" src="{{ asset('image/school.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer Etablissement" data-toggle="modal" data-target="" /></a>
       <a href="{{asset('/delete/delete-filiere')}}"> <img class="circle" src="{{ asset('image/filiere.png') }}" data-toggle="modal" data-target=""  data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Filiere"/></a>
       <a href="{{asset('/delete/delete-semestre')}}"> <img class="circle" src="{{ asset('image/semestre.png') }}" data-toggle="modal"   data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer semestre"/></a>
       <a href="{{asset('/delete/delete-module')}}"><img class="circle" src="{{ asset('image/module.png') }}" data-toggle="modal" data-target=""   data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Modele"/></a>
      <a href="{{asset('/delete/delete-element')}}"><img class="circle" src="{{ asset('image/cour.png') }}" data-toggle="modal" data-target=""  data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Element"/></a> 
       <a href="{{asset('/delete/delete-deplome')}}"><img class="circle" src="{{ asset('image/diploma1.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Diplôme" data-toggle="modal" data-target=""/></a> 

       </div>
       </div><!--fin class hread --
</div><!-- fi container -->


<div class="main-wrapper">
    <header class="header header--bg">
    <img style="float:right" src="{{asset('image/est.png')}} " height="100" alt="">
    <img style="float:left; " src="{{asset('image/logo.png')}} " height="100" alt="">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header"> 
          </div>
        </nav>
        <div class="header__content text-center">
          <h2 class="header__content__title">Application de gestion des filieres</h2>
          <p class="header__content__paragraph">Ecole superieur de technologie </p>
          @guest
          <a class="button button--margin-right button--hover" href="{{ url('/login')}}">Login</a>
          <a class="button button--hover" href="{{ url('/register')}}" >Register</a>
          @else
          <div class="homenav">
            <a class="button button--hover" href="{{ url('/logout')}}" >logout</a>
                </div>
          @endguest
        </div>
      </div>
    </header>
    
    <section class="service">
 
    <div class="container">
<div class="row">
<div class="col-12">
<h3 style="text-align:center;"> Modifier Etablissement ou Filiere ou <br> Module ou Element ou Diplôme </h3>
</div></div>
</div>
<div class="container">
              <div class="head d-flex justify-content-center">
       <div class="row" style="display: block!important;">
       <a href="{{asset('/update/update-etablessement')}}"><img class="circle" src="{{ asset('image/school.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Etablissement" data-toggle="modal" data-target="" /></a>
       <a href="{{asset('/update/update-filiere')}}"> <img class="circle" src="{{ asset('image/filiere.png') }}" data-toggle="modal" data-target=""  data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Filiere"/></a>
       <a href="{{asset('/update/update-semestre')}}"> <img class="circle" src="{{ asset('image/semestre.png') }}" data-toggle="modal"   data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier semestre"/></a>
       <a href="{{asset('/update/update-module')}}"><img class="circle" src="{{ asset('image/module.png') }}" data-toggle="modal" data-target=""   data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Modele"/></a>
      <a href="{{asset('/update/update-element')}}"><img class="circle" src="{{ asset('image/cour.png') }}" data-toggle="modal" data-target=""    data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Element"/></a> 
       <a href="{{asset('/update/update-deplome')}}"><img class="circle" src="{{ asset('image/diploma1.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Diplôme" data-toggle="modal" data-target=""/></a> 

       </div>
       </div><!--fin class hread -->
</div><!-- fi container -->
<br>
<div class="container">
<div class="row">
<div class="col-12">
<h3 style="text-align:center;"> Supprimer Etablissement ou Filiere ou <br> Module ou Element ou Diplôme </h3>
</div></div>
</div>
<div class="container">
              <div class="head d-flex justify-content-center">
       <div class="row" style="display: block!important;">
       <a href="{{asset('/delete/delete-etablessement')}}"><img class="circle" src="{{ asset('image/school.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer Etablissement" data-toggle="modal" data-target="" /></a>
       <a href="{{asset('/delete/delete-filiere')}}"> <img class="circle" src="{{ asset('image/filiere.png') }}" data-toggle="modal" data-target=""  data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Filiere"/></a>
       <a href="{{asset('/delete/delete-semestre')}}"> <img class="circle" src="{{ asset('image/semestre.png') }}" data-toggle="modal"   data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer semestre"/></a>
       <a href="{{asset('/delete/delete-module')}}"><img class="circle" src="{{ asset('image/module.png') }}" data-toggle="modal" data-target=""   data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Modele"/></a>
      <a href="{{asset('/delete/delete-element')}}"><img class="circle" src="{{ asset('image/cour.png') }}" data-toggle="modal" data-target=""  data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Element"/></a> 
       <a href="{{asset('/delete/delete-deplome')}}"><img class="circle" src="{{ asset('image/diploma1.png') }}" data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Diplôme" data-toggle="modal" data-target=""/></a> 

       </div>
       </div><!--fin class hread -->
</div><!-- fi container -->

    </section>
    
    <section class="contact contact--bg">
      <div class="container">
        <div class="page-section text-center">
        @foreach($element as $elem)
          <h2 class="page-section__title--white">Les Elements de Module  {{ $elem->nom_element }} </h2>
          @endforeach
          <p class="page-section__paragraph--white">Gérer le site</p>
          <a class="button button--hover" href="127.0.0.1:8000/ajouter">LETS GO</a>
        </div>
      </div>
    </section>
  

  </div>

@endsection
















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
        <form action="{{ url('/ajouter') }}"  method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
               <table>
                  <tr>
                     <td>Nom de l'Etablissement </td>
                     <td><input class="form-control"  type="text" name="nom_etablessement" value="{{ old('nom_etablessement')}}" placeholder="Nom de l'etablissement" id="nom" ></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td>Locatisation  </td>
                     <td><input class="form-control" type="text" name="local_etablessement" value="{{ old('local_etablessement')}}" placeholder="Localisation" id="local" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td><label for="">Selectioner image</label></td>
                       <td><input type="file" class="form-control" value="{{ old('images')}}"  name="images" required></td>
                  </tr>
                  <tr>
                  <td><br></td>
                  </tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn" type="submit" value="Insert" name="btn"></td>
                  </tr>
               </table>
               <div class="col-12">
               @foreach($errors->all() as $err)
                     <div class="alert alert-danger mt-4">
                     {{$err}}
                     </div>
               @endforeach
               </div>
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
                                 @foreach($etab as $fil)
                                 <option value="{{ $fil->nom_etablessement }}">{{ $fil->nom_etablessement }}</option>
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
      <form action="{{ url('/insertetabsemestre') }}" method="POST">
        @method('POST')
         @csrf
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
                           @foreach($file as $model)
                           <option value="{{ $model->nom_filiere }}"> {{ $model->nom_filiere }}->&nbsp;{{$model->nom_etabless}}</option>
                           @endforeach
                        </select>
                     </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nom de l'Etablissement </td>
                           <td style="text-align:center;">
                              <select class="form-control" name="nom_etabless" id="" required>
                                 <option value="">default </option>
                                 @foreach($etab as $fil)
                                 <option value="{{ $fil->nom_etablessement }}"> {{ $fil->nom_etablessement }}</option>
                                 @endforeach
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
      <form action="{{ url('/insertetabmod') }}" method="POST">
        @method('POST')
         @csrf
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
                           @foreach($semestre as $model)
                           <option value="{{ $model->nom_s }}">S{{ $model->nom_s }}->&nbsp; {{$model->nom_etabless}}</option>
                           @endforeach
                        </select>
                        </td>
                  </tr>
                  
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Non de filiere </td>
                     <td>
                        <select class="form-control" name="nom_fil" id="" required>
                           <option value="">default </option>
                           @foreach($file as $model)
                           <option value="{{ $model->nom_filiere }}">{{ $model->nom_filiere }}->&nbsp; {{$model->nom_etabless}}</option>
                           @endforeach
                        </select>
                     </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nom de l'Etablissement </td>
                           <td style="text-align:center;">
                              <select class="form-control" name="nom_etabless" id="" required>
                                 <option value="">default </option>
                                 @foreach($etab as $fil)
                                 <option value="{{ $fil->nom_etablessement }}">{{ $fil->nom_etablessement }}</option>
                                 @endforeach
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
      <form action="{{ url('/insertetabelem') }}" method="POST">
        @method('POST')
         @csrf
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
                           @foreach($mod as $modele)
                           <option value="{{ $modele->nom_module }}">{{ $modele->nom_module }}->&nbsp; {{$modele->nom_etabless}}</option>
                           @endforeach
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
                                 @foreach($etab as $fil)
                                 <option value="{{ $fil->nom_etablessement }}">{{ $fil->nom_etablessement }}</option>
                                 @endforeach
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
      @csrf
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
                           @foreach($etab as $dep)
                          <option  value="{{$dep->nom_etablessement}}">{{ $dep->nom_etablessement }}</option>
                           @endforeach
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
