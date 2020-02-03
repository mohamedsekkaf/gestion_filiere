@extends("layouts/mylayout")
@section("content")
<!--<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Modefier Semestre </h3>
  <form action="{{ url('/update/update-semestre') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
         <table>
                    <tr>
                    <td>Selectioner Semestre</td>
                    <td>
                    <select class="form-control" name="nom_sold" id="" required>
                           <option value="">default </option>
                           @foreach($semestre as $s)
                           <option value="{{ $s->nom_s }}">{{ $s->nom_s }} ->&nbsp;{{$s->nom_etabless}}</option>
                           @endforeach
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
                           @foreach($file as $model)
                           <option value="{{ $model->nom_filiere }}">{{ $model->nom_filiere }}->&nbsp;{{$model->nom_etabless}}</option>
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
                                 @foreach($etap as $fil)
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
                <img style="transform: rotate(0deg);" src="{{asset('image/refresh.png')}}" alt=""/>
            </div>
            <form action="{{ url('/update/update-semestre') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Modefier Semestre</h3>
                  <div class="row">
                    <div class="col-md-12">
                  <div class="form-group tt">
                    <label for="">Selectionner Semestre</label> 
                    <select class="form-control" name="nom_sold" id="" required>
                           <option value="">default </option>
                           @foreach($semestre as $s)
                           <option value="{{ $s->nom_s }}">{{ $s->nom_s }} ->&nbsp;{{$s->nom_etabless}}</option>
                           @endforeach
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
                           @foreach($file as $model)
                           <option value="{{ $model->nom_filiere }}">{{ $model->nom_filiere }}->&nbsp;{{$model->nom_etabless}}</option>
                           @endforeach
                        </select>
              </div>
  
              <div class="form-group tt">
                 <label for="">Nombre de l'établissement</label>
                 <select class="form-control" name="nom_etabless" id="" required>
                                 <option value="">default </option>
                                 @foreach($etap as $fil)
                                 <option value="{{ $fil->nom_etablessement }}">{{ $fil->nom_etablessement }}</option>
                                 @endforeach
                              </select>
              </div>
             <div class="form-group tt">
                            <input type="submit" name="btnSubmit" class="btnContact"  placeholder="image"  value="Modefier" />        
                    </div>    
                    </div>
                <div class="col-12">
               @foreach($errors->all() as $err)
                     <div class="alert alert-danger mt-5">
                     {{$err}}
                     </div>
               @endforeach
               </div>
            </form>
</div>
</div>
</div>
<br><br>
@endsection