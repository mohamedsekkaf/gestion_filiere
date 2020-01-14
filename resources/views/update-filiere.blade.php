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
          
             
             <table>
             <tr>
             <td style="width:20vh">selectionner Filiere</td>
             <td>
             <select style="width:60vh" name="nom" class=" form-control">
           <option value="0">default </option>
               @foreach($file as $e)
              <option value=" {{ $e->nom_filiere }}">{{ $e->nom_filiere }}</option>
              @endforeach
             </select>
             </td>
             <td>
             <select style="width:60%" name="id_filiere" class=" form-control">
           <option value="0">default </option>
               @foreach($file as $e)
              <option value=" {{ $e->id_filiere }}">{{ $e->nom_filiere }}</option>
              @endforeach
             </select>
             </td>
             </tr>
                  <tr>
                           <td style="width:20%">Nom de filiere </td>
                           <td style="width:60%"><input class=" form-control" name="nom_filiere" type="text" ></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nombre de Module  </td>
                           <td><input class="input form-control"  name="nummodel" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary" type="submit" value="Update" name="btn" class="form-control"></td>
                  </tr>
               </table>
</form>
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->

@endsection