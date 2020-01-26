@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Modefier Module </h3>
  <form action="{{ url('/update/update-module') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
          
             <table>
             <tr>
             <td style="width:14%">Selectionner Module</td>
             <td>
             <select style="width:100%" class=" form-control" name="nom" required>
           <option value="">default </option>
               @foreach($mod as $m)
              <option value="{{$m->nom_module}}">{{ $m->nom_module}}->&nbsp;{{$m->nom_etabless}}</option>
              @endforeach
             </select></td>
             </tr>
             <tr><td><br></td></tr>
                  <tr>
                     <td >Nom de modele </td>
                     <td><input  class=" form-control" name="nom_module" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td >  Nombre d'element  </td>
                     <td><input class=" form-control" name="num_element" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn form-control"  type="submit" value="Update" name="btn"></td>
                  </tr>
               </table>
</form>
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->
@endsection