@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier Filiere </h5>
  <form action="{{ url('/delete/delete-filiere') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
          <table>
          <tr>
          <td  style="width:20%" >selectionner Filiere</td>
          <td>
                        <select style="width:80%" name="id_filiere" class=" form-control">
                    <option value="0">default </option>
                        @foreach($file as $e)
                        <option value=" {{ $e->id_filiere }}">{{ $e->nom_filiere }}->&nbsp;{{$e->nom_etabless}}</option>
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
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->

@endsection