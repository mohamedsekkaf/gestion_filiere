@extends("layouts/mylayout")
@section("content")
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
            <form action="{{ url('/ajouter/ajouter-module') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Ajouter Module</h3>
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group tt">
                        <label for="">Module</label>
                            <input type="text"   class="form-control" name="nom_module" type="text"  value="{{ old('nom_module')}}" placeholder="Nom de Module" id="nom"  />
                        </div>
                        <div class="form-group tt">
                        <label for="">Nombre de l'element</label>
                            <input   class="form-control"  name="num_element" type="number" value="{{ old('num_element')}}" placeholder="Nombre de module" id="local"/>
                        </div>
                        <div class="form-group tt">
                            <label for="">Semester</label>
                        <select class="form-control" name="nom_se"  value="{{ old('nom_se')}}"  id="" required>
                           <option value="">default </option>
                           @foreach($semestre as $model)
                           <option value="{{ $model->nom_s }}">S{{ $model->nom_s }}->&nbsp; {{$model->nom_etabless}}</option>
                           @endforeach
                        </select>
                        </div>
                        <div class="form-group tt">
                            <label for=""> filiere </label>
                        <select class="form-control" name="nom_fil"  value="{{ old('nom_fil')}}" id="" required>
                           <option value="">default </option>
                           @foreach($file as $model)
                           <option value="{{ $model->nom_filiere }}">{{ $model->nom_filiere }}->&nbsp; {{$model->nom_etabless}}</option>
                           @endforeach
                        </select>
                        </div> 
                        <div class="form-group tt">
                            <label for="">Eletablessement</label>
                        <select class="form-control" name="nom_etabless"  value="{{ old('nom_etabless')}}" id="" required>
                                 <option value="">default </option>
                                 @foreach($etab as $fil)
                                 <option value="{{ $fil->nom_etablessement }}">{{ $fil->nom_etablessement }}</option>
                                 @endforeach
                              </select>
                        </div>
                        <div class="form-group tt">
                            <input type="submit" name="btnSubmit" class="btnContact"  placeholder="image"  value="Ajouter" />
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
<br><br>
@endsection