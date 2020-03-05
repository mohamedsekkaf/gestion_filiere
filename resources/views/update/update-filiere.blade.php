@extends("layouts/mylayout")
@section("content")
<!--<div class="container">
<div class="row">
<div class="col-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Modefier Filiere </h3>
  <br>
  <form action="{{ url('/update/update-filiere') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
             <table>
             <tr>
             <td style="width:14%;">selectionner Filiere</td>
             <td style="width:70%">
             <select  name="nom" class=" form-control" required>
             <option value="">default </option>
               @foreach($file as $e)
              <option value=" {{ $e->nom_filiere }}">{{ $e->nom_filiere }}->&nbsp;{{$e->nom_etabless}}</option>
              @endforeach
             </select>
             </td>
             </tr>
             <tr><td><br></td></tr>
                  <tr>
                           <td>Nom de filiere </td>
                           <td><input class="form-control" name="nom_filiere" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                           <td> Nombre de Module  </td>
                           <td><input class=" form-control"  name="nummodel" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn" type="submit" value="Update" name="btn" class="form-control"></td>
                  </tr>
               </table>
</form>  
  </div>
</div>
</div><!-- fin col-
</div><!-- fin row
</div><!-- fin container-->

<br><br>

<style>
body {
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
</style>
<div class="container contact-form">
    <div class="contact-image">
        <img style="transform: rotate(0deg);" src="{{asset('image/refresh.png')}}" alt="" />
    </div>
    <form action="{{ url('/update/update-filiere') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <h3>Modefier Filiere</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group tt ">
                    <label for="">selectionner l'etablissement</label>
                    <select name="" class="form-control" id="test" required>
                        <option value="">default </option>
                        @foreach($etap as $e)
                        <option value="{{ $e->nom_etablessement }}">{{ $e->nom_etablessement }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group tt ">
                    <label for="">selectionner le Filiere</label>
                    <select name="nom" class=" form-control" id="test1" required>
                        <option value="">default </option>
                        <script>
                        var fil = <?php echo $file; ?> ;
                        var length2 = fil.length;
                        $(document).ready(function() {
                            $("#test").change(function() {
                                var m = $("#test option:selected").val();
                                for (i = 0; i < <?php echo $file; ?>.length; i++) {
                                    $("#t").remove();
                                }
                                for (j = 0; j < l<?php echo $file; ?>.length; j++) {
                                    if (fil[j]["nom_etabless"] == m) {
                                        $("#test1").append('<option id="t" value="' + fil[j][
                                                "nom_filiere"
                                            ] + '">' + fil[j]["nom_filiere"] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                    </div>

                        <br>
                        <div class="form-group tt">
                            <label for=""> Nom de filiere</label>
                            <input class="form-control" name="nom_filiere" type="text" required>
                        </div>

                        <div class="form-group tt">
                            <label for="">Nombre de Module </label>
                            <input class=" form-control" name="nummodel" type="text" required>

                        </div>


                        <div class="form-group tt">
                            <input type="submit" name="btnSubmit" class="btnContact" placeholder="image"
                                value="Modefier" />
                        </div>
                </div>
                <div class="col-12">
                    @foreach($errors->all() as $err)
                    <div class="alert alert-danger mt-5">
                        {{$err}}
                    </div>
                    @endforeach
                </div>
    </form>
</div>
</div>
</div>
<br><br>
@endsection