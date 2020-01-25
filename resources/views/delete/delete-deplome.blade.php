@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Supprimer deplome  </h3>
  <form action="{{ url('/delete/delete-deplome') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
         <table>
          <tr>
          <td  style="width:20%" >selectionner Filiere</td>
          <td>
             <select style="width:60%" name="id_deplome" class="form-control">
           <option value="0">default </option>
               @foreach($dep as $d)
              <option value="{{$d->id_deplome}}">{{ $d->nom_deplome }}</option>
              @endforeach
             </select>
             </td>
             </tr>
             <tr>
             <td>
             <input class="btn-primary btn" type="submit" value="Supprimer" name="btn">
             </td>
             </tr>
             </table>
</form>
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->

@endsection
