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
            <form action="{{ url('/ajouter/ajouter-element') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Ajouter Filiere</h3>
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group tt">
                            <input type="text"   class="form-control" name="nom_element" type="text"  value="{{ old('nom_filiere')}}" placeholder="Nom de filiere" id="nom"  />
                        </div>
                        <div class="form-group tt">
                            <input type="text"  class="form-control"  name="horaire_element" type="number" value="{{ old('nummodel')}}" placeholder="Nombre de module" id="local"/>
                        </div>
                        <div class="form-group tt">
                            <label for="">Module</label>
                        <select class="form-control" name="nom_mod" id="" required>
                           <option value="">default </option>
                           @foreach($mod as $modele)
                           <option value="{{ $modele->nom_module }}">{{ $modele->nom_module }}->&nbsp; {{$modele->nom_etabless}}</option>
                           @endforeach
                        </select>
                        </div>
                        <div class="form-group tt">
                            <label for="">Eteblesement</label>
                        <select class="form-control" name="nom_etabless" id="" required>
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
@endsection