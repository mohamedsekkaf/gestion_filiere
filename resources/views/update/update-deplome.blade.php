@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier  </h5>
  <form action="{{ url('/update/update-deplome') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
          
             <table>
             <tr>
             <td>selectionner le deplome</td>
             <td>
             <select name="id_deplome" class="form-control">
           <option value="0">default </option>
               @foreach($dep as $d)
              <option value="{{$d->id_deplome}}">{{ $d->nom_deplome }}</option>
              @endforeach
             </select>
             </td>
             <tr><td><br></td></tr>
             </tr>
                  <tr>
                     <td style="width:20%">Nom de Deplome </td>
                     <td style="width:80%"><input class="form-control" name="nom_deplome" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td style="width:20%"> Type de Deplome </td>
                     <td style="width:80%"><input class="form-control" name="type_deplome" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td style="width:20%"> Durée de Deplome</td>
                     <td>
                        <select name="duree_deplome" class="form-control" id="" style="width:80%">
                           <option value="2 ans">2 ans </option>
                           <option value="3 ans"> 3 ans</option>
                           <option value="4 ans">4 ans </option>
                           <option value="5 ans">5 ans </option>
                           <option value="6 ans">6 ans </option>
                           <option value="7 ans">7 ans </option>
                           <option value="8 ans">8 ans </option>
                           <option value="9 ans">9 ans </option>
                           <option value="10 ans">10 ans </option>
                        </select>
                     </td>
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
