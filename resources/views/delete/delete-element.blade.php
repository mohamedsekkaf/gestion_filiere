@extends("layouts/mylayout")
@section("content")
<div class="container">
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
              <option value=" {{ $e->id_element }}">{{ $e->nom_element }}</option>
              @endforeach
             </select>
             </td>
            <tr><td><br></td></tr>
            <tr>
             <td>
                    <input class="btn-primary btn" type="submit" value="Supprimer" name="btn" class="form-control">
             </td>
             </tr>
           </tr>

           </table>
                 
</form>
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->
@endsection