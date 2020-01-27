@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Modefier Filiere </h3>
  <br>
  <form action="{{ url('/update/update-filiere') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
             <table>
             <tr>
             <td style="width:14%;">selectionner Filiere</td>
             <td style="width:70%">
             <select  name="nom" class=" form-control" required>
             <option value="">default </option>
               @foreach($file as $e)
              <option value=" {{ $e->nom_filiere }}">{{ $e->nom_filiere }}->&nbsp;{{$e->nom_etabless}}</option>
              @endforeach
             </select>
             </td>
             </tr>
             <tr><td><br></td></tr>
                  <tr>
                           <td>Nom de filiere </td>
                           <td><input class="form-control" name="nom_filiere" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nombre de Module  </td>
                           <td><input class=" form-control"  name="nummodel" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn" type="submit" value="Update" name="btn" class="form-control"></td>
                  </tr>
               </table>
</form>  
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->

@endsection