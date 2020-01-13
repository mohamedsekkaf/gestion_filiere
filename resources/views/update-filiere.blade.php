@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier Filiere </h5>
  <form action="{{ url('/update-filiere') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
          <select name="id_filiere">
           <option value="0">default </option>
               @foreach($file as $e)
              <option value=" {{ $e->id_filiere }}">{{ $e->nom_filiere }}</option>
              @endforeach
             </select>
             <table>
                  <tr>
                           <td>Nom de filiere </td>
                           <td><input class="input" name="nom_filiere" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nombre de Module  </td>
                           <td><input class="input"  name="nummodel" type="text"></td>
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