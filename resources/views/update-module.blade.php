@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier Module </h5>
  <form action="{{ url('/update-module') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
          <select name="id_module" >
           <option value="9">default </option>
               @foreach($mod as $m)
              <option value="{{$m->id_module}}">{{ $m->nom_module}}</option>
              @endforeach
             </select>
             <table>
                  <tr>
                     <td>Nom de modele </td>
                     <td><input name="nom_module" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> Nombre d'element  </td>
                     <td><input name="num_element" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Non de filiere </td>
                     
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary" type="submit" value="Insert" name="btn"></td>
                  </tr>
               </table>
</form>
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->
@endsection