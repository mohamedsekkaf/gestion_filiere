@extends("layouts/mylayout")
@section("content")
<!--<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier  </h5>
  <form action="{{ url('/update/update-deplome') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
          
             <table>
             <tr>
             <td style="width:14%">selectionner le deplome</td>
             <td>
             <select style="width:100%" name="id_deplome" class="form-control" required>
           <option value="">default </option>
               @foreach($dep as $d)
              <option value="{{$d->id_deplome}}">{{ $d->nom_deplome }}</option>
              @endforeach
             </select>
             </td>
             <tr><td><br></td></tr>
             </tr>
                  <tr>
                     <td >Nom de Deplome </td>
                     <td><input class="form-control" name="nom_deplome" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> Type de Deplome </td>
                     <td ><input class="form-control" name="type_deplome" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td > Durée de Deplome</td>
                     <td>
                        <select name="duree_deplome" class="form-control" id=""required >
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
                     </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn" type="submit" value="Update" name="btn"></td>
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
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form action="{{ url('/update/update-deplome') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Modefier deplome</h3>
                  <div class="row">
                    <div class="col-md-12">
                  <div class="form-group tt">
                    <label for="">selectionner le deplome</label> 
                 <select style="width:100%" name="id_deplome" class="form-control" required>
                 <option value="">default </option>
                 @foreach($dep as $d)
                  <option value="{{$d->id_deplome}}">{{ $d->nom_deplome }}</option>
                 @endforeach
             </select>
             <br>
             <div class="form-group tt">
            <label for=""> Nom de Deplome </label>
                     <td><input class="form-control" name="nom_deplome" type="text" required></td>
              </div>
              <div class="form-group tt">
              <td> Type de Deplome </td>
                     <td ><input class="form-control" name="type_deplome" type="text" required></td>
              </div>

              <div class="form-group tt">
                 <label for="">Durée de Deplome</label>
              <select name="duree_deplome" class="form-control" id=""required >
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
