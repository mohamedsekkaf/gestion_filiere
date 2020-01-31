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
            <form action="{{ url('/ajouter/ajouter-deplome') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Ajouter Deplome</h3>
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text"  type="text"  class="form-control"  name="nom_deplome" value="{{ old('nom_etablessement')}}" placeholder="Nom de deplome" id="nom"  />
                        </div>
                        <div class="form-group">
                            <input type="text"  type="text"  class="form-control"  name="type_deplome" value="{{ old('local_etablessement')}}" placeholder="type" id="local"/>
                        </div>
                        <div class="form-group">
                            <label for="">Durée</label>
                        <select class="form-control" name="duree_deplome" id="" required>
                           <option value="2 ans">2 ans </option>
                           <option value="3 ans">3 ans</option>
                           <option value="4 ans">4 ans </option>
                           <option value="5 ans">5 ans </option>
                           <option value="6 ans">6 ans </option>
                           <option value="7 ans">7 ans </option>
                           <option value="8 ans">8 ans </option>
                           <option value="9 ans">9 ans </option>
                           <option value="10 ans">10 ans </option>
                        </select>
                        </div>
                        <div class="form-group">
                           <label for=""> Etalessement</label>
                        <select class="form-control" name="nom_etap" id="" required>
                           <option value="">default</option>
                           @foreach($etab as $dep)
                          <option  value="{{$dep->nom_etablessement}}">{{ $dep->nom_etablessement }}</option>
                           @endforeach
                        </select>
                        </div>
                        <div class="form-group">
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
@endsection