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
                <img style="transform: rotate(0deg);" src="{{asset('image/rubbish.png')}}" alt=""/>
            </div>
            <form action="{{ url('/delete/delete-deplome') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Supprimer deplome</h3>
                  <div class="row">
                    <div class="col-md-12">
                  <div class="form-group tt">
                    <label for="">selectionner Deplome </label> 
          
                  <select name="nom_deplome" class="form-control">
                  <option value="0">default </option>
                      @foreach($dep as $d)
                      <option value="{{$d->nom_deplome}}">{{ $d->nom_deplome }}->&nbsp;{{$d->nom_etap}}</option>
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
