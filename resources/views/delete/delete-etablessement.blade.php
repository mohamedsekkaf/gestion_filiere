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
                <img style="transform: rotate(0deg);" src="{{asset('image/rubbish.png')}}" alt="rocket_contact"/>
            </div>
            <form action="{{ url('/delete/delete-etablessement') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Supprimer Etablessement</h3>
                  <div class="row">
                    <div class="col-md-12">
                  <div class="form-group tt">
                    <label for="">selectionner Etablessement</label> 
          
                    <select name="nom" class="form-control" required>
           <option value="">default </option>
               @foreach($etap as $et)
              <option value="{{$et->nom_etablessement}}">{{ $et->nom_etablessement }}</option>
              @endforeach
             </select>
             <br><br>
             <div class="form-group tt">
                            <input type="submit" name="btnSubmit" class="btnContact"  placeholder="image"  value="Supprimer" />        
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
