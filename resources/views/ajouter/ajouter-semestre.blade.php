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
            <form action="{{ url('/ajouter/ajouter-semestre') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Ajouter Semestre</h3>
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text"   class="form-control" name="nom_s" value="{{ old('')}}" placeholder="Nom de Semestre" id=""  />
                        </div>
                        
                        <div class="form-group">
                        <select class="form-control" name="nom_fil" id="" >
                           <option value="">default </option>
                           @foreach($file as $model)
                           <option value="{{ $model->nom_filiere }}"> {{ $model->nom_filiere }}->&nbsp;{{$model->nom_etabless}}</option>
                           @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <td style="text-align:center;">
                              <select class="form-control" name="nom_etabless" id="" >
                                 <option value="">default </option>
                                 @foreach($etab as $fil)
                                 <option value="{{ $fil->nom_etablessement }}"> {{ $fil->nom_etablessement }}</option>
                                 @endforeach
                              </select>
                        </div>
                        <div class="form-group">
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
@endsection