@extends("layouts/mylayout")
@section("content")
<!--<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Supprimer Element</h3>
  <form action="{{ url('/delete/delete-element') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
         <table>
          <tr>
          <td  style="width:20%" >selectionner Filiere</td>
          <td>
          <select style="width:60%" name="id_element" class="form-control" required>
           <option value="">default </option>
               @foreach($elem as $e)
              <option value=" {{ $e->id_element }}">{{ $e->nom_element }}->&nbsp;{{$e->nom_etabless}}</option>
              @endforeach
             </select>
             </td>
            <tr><td><br></td></tr>
            <tr>
            <td></td>
             <td>
                    <input class="btn-primary btn" type="submit" value="Supprimer" name="btn" class="form-control">
             </td>
             </tr>
           </tr>

           </table>
                 
</form>
  </div>
</div>
</div><!-- fin col
</div><!-- fin row
</div><!-- fin container-->


<br><br>

<style>
body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
</style>
<div class="container contact-form">
            <div class="contact-image">
                <img style="transform: rotate(0deg);" src="{{asset('image/rubbish.png')}}"alt="rocket_contact"/>
            </div>
            <form action="{{ url('/delete/delete-element') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Supprimer Element</h3>
                  <div class="row">
                    <div class="col-md-12">
                  <div class="form-group tt">
                    <label for="">selectionner Element </label> 
          
                    <select  name="id_element" class="form-control" required>
           <option value="">default </option>
               @foreach($elem as $e)
              <option value=" {{ $e->id_element }}">{{ $e->nom_element }}->&nbsp;{{$e->nom_etabless}}</option>
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