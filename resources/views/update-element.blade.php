@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier Element</h5>
  <form action="{{ url('/update-element') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
          <select name="id_element" class="form-control">
           <option value="0">default </option>
               @foreach($elem as $e)
              <option value=" {{ $e->id_element }}">{{ $e->nom_element }}</option>
              @endforeach
             </select>
             <br><br>
             <table>
                  <tr>
                     <td style="width:20%">Nom de l'element </td>
                     <td style="width:80%"><input class="form-control" name="nom_element" type="text"></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td style="width:20%"> Non de Module </td>
                     <td style="width:80%"><input class="form-control" name="nom_mod" type="text"></td>
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