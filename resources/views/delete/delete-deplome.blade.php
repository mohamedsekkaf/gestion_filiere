@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier  </h5>
  <form action="{{ url('/delete/delete-deplome') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
         <table>
          <tr>
          <td  style="width:20%" >selectionner Filiere</td>
          <td>
             <select name="id_deplome" class="form-control">
           <option value="0">default </option>
               @foreach($dep as $d)
              <option value="{{$d->id_deplome}}">{{ $d->nom_deplome }}</option>
              @endforeach
             </select>
             </td>
             </tr>
             <tr>
             <td>
             <input class="btn-primary" type="submit" value="Supprimer" name="btn">
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
