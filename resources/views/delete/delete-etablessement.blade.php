@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Supprimer Etablessemment </h3>
  <form action="{{ url('/delete/delete-etablessement') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
         <table>
          <tr>
          <td  style="width:20%" >selectionner Filiere</td>
          <td>
          <select name="id" class="form-control" required>
           <option value="">default </option>
               @foreach($etap as $et)
              <option value="{{$et->id_etablessement}}">{{ $et->nom_etablessement }}</option>
              @endforeach
             </select>
             </td>
            <tr><td><br></td></tr>
            <tr>
             <td>
                    <input class="btn-primary" type="submit" value="Supprimer" name="btn" class="form-control">
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
