@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier Element</h5>
  <form action="{{ url('/update/update-element') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
             <table>
             <tr>
             <td style="width:20%">Selectionner Element</td>
             <td>
             <select style="width:100%" name="id_element" class="form-control">
           <option value="0">default </option>
               @foreach($elem as $e)
              <option value=" {{ $e->id_element }}">{{ $e->nom_element }}</option>
              @endforeach
             </select>
             </td>
             </tr>
             <tr><td><br></td></tr>
                  <tr>
                     <td style="width:20%">Nom de l'element </td>
                     <td style="width:100%"><input class="form-control" name="nom_element" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td style="width:20%">L'horaire de l'element </td>
                     <td style="width:100%"><input class="form-control" name="horaire_element" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary" type="submit" value="Insert" name=""></td>
                  </tr>
               </table>
</form>
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->
@endsection