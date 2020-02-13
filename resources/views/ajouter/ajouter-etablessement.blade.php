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
            <form action="{{ url('/ajouter/ajouter-etablessement') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Ajouter Établissement</h3>
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group tt">
                        <label for="">Etablissement</label>
                            <input type="text"  type="text"  class="form-control"  name="nom_etablessement" value="{{ old('nom_etablessement')}}" placeholder="Nom de l'etablissement" id="nom" required  />
                        </div>
                        <div class="form-group tt">
                        <label for="">Localisation</label>
                            <input type="text"  type="text"  class="form-control"   name="local_etablessement" value="{{ old('local_etablessement')}}" placeholder="Localisation" id="local"/>
                        </div>
                        <div class="form-group tt">
                        <label for="">Image</label>
                            <input type="file"  class="form-control upload" id="file" aria-hidden="true"  value="{{ old('image')}}" placeholder="image"  name="image"/>
                           <!--  <label for="file">Choose a file</label> -->
                        </div>
                        <div class="form-group tt">
                        <label for="">Image</label>
                            <input type="file"  class="form-control upload" id="file" aria-hidden="true"  value="{{ old('image')}}" placeholder="image"  name="v"/>
                           <!--  <label for="file">Choose a file</label> -->
                        </div>
                        <div class="form-group tt">
                            <input type="submit" name="btnSubmit" class="btnContact"    value="Ajouter" />
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