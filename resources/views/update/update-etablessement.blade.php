@extends("layouts/mylayout")
@section("content")
<!--<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Modefier Etablessemment </h3>
  <form action="{{ url('/update/update-etablessement') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
          
               <table>
               <tr>
               <td>Selectionner Nom de l'etablessement</td>
               <td>
               <select class="form-control" name="nom" required>
           <option value="">default </option>
               @foreach($etap as $et)
              <option value="{{$et->nom_etablessement}}">{{ $et->nom_etablessement }}</option>
              @endforeach
             </select>
             </td>
               </tr>
               <tr><td><br></td></tr>
                  <tr>
                     <td style="width:20%">Nom de l'etablissement </td>
                     <td style="width:100%"> <input class="input form-control" type="text" name="nom_etablessement" placeholder="Nom de l'etablissement" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td>Locatisation  </td>
                     <td><input class="input form-control" type="text" name="local_etablessement" placeholder="Localisation" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td><label for="">Selectioner image</label></td>
                       <td><input type="file" class="form-control" name="images" required></td>
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
</div><!-- fin co
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
            <form action="{{ url('/update/update-etablessement') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Modefier etablissement</h3>
                  <div class="row">
                    <div class="col-md-12">
                  <div class="form-group tt">
                    <label for="">selectionner le Element</label> 
                    <select class="form-control" name="nom" required>
           <option value="">default </option>
               @foreach($etap as $et)
              <option value="{{$et->nom_etablessement}}">{{ $et->nom_etablessement }}</option>
              @endforeach
             </select>
             <br>
             <div class="form-group tt">
            <label for=""> Nom de l'etablissement </label>
            <input class="input form-control" type="text" name="nom_etablessement" placeholder="Nom de l'etablissement" required>
              </div>
              
              <div class="form-group tt">
                 <label for="">Localisation</label>
                 <input class="input form-control" type="text" name="local_etablessement" placeholder="Localisation" required>
                         
              </div>

              <div class="form-group tt">
                 <label for="">Image</label>
              <input type="file" class="form-control" name="images" required>
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
