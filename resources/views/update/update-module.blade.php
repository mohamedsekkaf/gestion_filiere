@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier Module </h5>
  <form action="{{ url('/update/update-module') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
          
             <table>
             <tr>
             <td style="width:20vh">Selectionner Module</td>
             <td>
             <select  style="width:60vh" class=" form-control" name="id_module" >
           <option value="9">default </option>
               @foreach($mod as $m)
              <option value="{{$m->id_module}}">{{ $m->nom_module}}</option>
              @endforeach
             </select>
             </td>
             <td>
             <select style="width:60%" class=" form-control" name="nom" >
           <option value="9">default </option>
               @foreach($mod as $m)
              <option value="{{$m->nom_module}}">{{ $m->nom_module}}</option>
              @endforeach
             </select></td>
             </tr>
                  <tr>
                     <td style="width:20%">Nom de modele </td>
                     <td><input style="width:60%" class=" form-control" name="nom_module" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td style="width:20%">  Nombre d'element  </td>
                     <td><input style="width:60%" class=" form-control" name="num_element" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary" class=" form-control" type="submit" value="Insert" name="btn"></td>
                  </tr>
               </table>
</form>
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->
@endsection