@extends("layouts/mylayout")
@section("content")
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Modefier Semestre </h3>
  <form action="{{ url('/update/update-semestre') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
         <table>
                    <tr>
                    <td>Selectioner Semestre</td>
                    <td>
                    <select class="form-control" name="nom_sold" id="" required>
                           <option value="">default </option>
                           @foreach($semestre as $s)
                           <option value="{{ $s->nom_s }}">{{ $s->nom_s }} &nbsp;&nbsp;{{$s->nom_etabless}}</option>
                           @endforeach
                        </select>
                    </td>
                    </tr>
                    <tr><td><br></td></tr>
                  <tr>
                     <td style="width:14%">Nom semestre </td>
                     <td style="width:100%"><input class="form-control" name="nom_snew" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                  <td> Non de filiere </td>
                     <td>
                        <select class="form-control" name="nom_fil" id="" required>
                           <option value="">default </option>
                           @foreach($file as $model)
                           <option value="{{ $model->nom_filiere }}">{{ $model->nom_filiere }}</option>
                           @endforeach
                        </select>
                     </td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nom de l'Etablissement </td>
                           <td style="text-align:center;">
                              <select class="form-control" name="nom_etabless" id="" required>
                                 <option value="">default </option>
                                 @foreach($etap as $fil)
                                 <option value="{{ $fil->nom_etablessement }}">{{ $fil->nom_etablessement }}</option>
                                 @endforeach
                              </select>
                           </td>
                           </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input  class="btn-primary btn" type="submit" value="Insert" name="btn"></td>
                  </tr>
               </table>
             
</form>
  </div>
</div>
</div><!-- fin col-->
</div><!-- fin row-->
</div><!-- fin container-->
@endsection