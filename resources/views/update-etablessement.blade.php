@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier Etablessemment </h5>
  <form action="{{ url('/update-etablessement') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
          <select name="id" >
           <option value="0">default </option>
               @foreach($etap as $et)
              <option value="{{$et->id_etablessement}}">{{ $et->nom_etablessement }}</option>
              @endforeach
             </select>
               <table>
                  <tr>
                     <td>Nom de l'etablissement </td>
                     <td><input class="input" type="text" name="nom_etablessement" placeholder="Nom de l'etablissement"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td>Locatisation  </td>
                     <td><input class="input" type="text" name="local_etablessement" placeholder="Localisation"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary" type="submit" value="Update" name="btn"></td>
                  </tr>
               </table>
</form>
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->

@endsection
