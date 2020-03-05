@extends("layouts/mylayout")
@section("content")
<!--<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Supprimer Module </h3>
  <form action="{{ url('/delete/delete-module') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
          
             <table>
             <tr>
             <td style="width:20%">Selectionner Module</td>
             <td>
             <select  style="width:60vh" class=" form-control" name="id_module" >
           <option value="9">default </option>
               @foreach($mod as $m)
              <option value="{{$m->id_module}}">{{ $m->nom_module}}->&nbsp;{{$m->nom_etabless}}</option>
              @endforeach
             </select>
             </td>
             </tr>
             <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn" type="submit" value="Supprimer" name="btn"></td>
                  </tr>
               </table>
</form>
  </div>
</div>
</div>
</div>
</div> fin container-->
<br><br>

<style>
body {
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
</style>
<div class="container contact-form">
    <div class="contact-image">
        <img style="transform: rotate(0deg);" src="{{asset('image/rubbish.png')}}" alt="rocket_contact" />
    </div>
    <form action="{{ url('/delete/delete-module') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <h3>Supprimer Module</h3>
        <div class="row">
            <div class="col-md-12">
            <div class="form-group tt">
                    <label for="">selectionner l'etablissement</label>
                    <select class=" form-control" name="" id="etab" required>
                        <option value="">default </option>
                        @foreach($etap as $e)
                        <option value="{{ $e->nom_etablessement }}">{{ $e->nom_etablessement }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group tt">
                    <label for="">selectionner la filiere</label>
                    <select class=" form-control" name="" id="fil" required>
                        <option value="">default </option>
                        <script>
                        var fil = <?php echo $file; ?> ;
                        var length2 = fil.length;
                        $(document).ready(function() {
                            $("#etab").change(function() {
                                var m = $("#etab option:selected").val();
                                for (i = 0; i < <?php echo $file; ?>.length; i++) {
                                    $("#t").remove();
                                    $("#tt").remove();
                                    $("#ttt").remove();
                                }
                                for (j = 0; j < <?php echo $file; ?>.length; j++) {
                                    if (fil[j]["nom_etabless"] == m) {
                                        $("#fil").append('<option id="t" value="'+fil[j]["nom_filiere"]+'">'+fil[j]["nom_filiere"]+'</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                      <!--   @foreach($file as $f)
                        <option value="{{$f->nom_filiere}}">{{ $f->nom_filiere}}->&nbsp;{{$f->nom_etabless}}</option>
                        @endforeach
                    </select> -->
                </div>
                <div class="form-group tt">
                    <label for="">selectionner Semestre</label>
                    <select class=" form-control" name="" id="sem" required>
                        <option value="">default </option>
                        <script>
                        var s = <?php echo $semestre; ?> ;
                        var lengt = s.length;
                        $(document).ready(function() {
                            $("#fil").change(function() {
                                var m =$("#fil option:selected").val();
                                for (i = 0; i < <?php echo $semestre; ?>.length; i++) {
                                    $("#tt").remove();
                                    $("#ttt").remove();
                                }
                                for (j = 0; j < <?php echo $semestre; ?>.length; j++) {
                                    if (s[j]["nom_file"] == m) {
                                        $("#sem").append('<option id="tt" value="'+s[j]["nom_s"]+'">Semestre '+s[j]["nom_s"].split(" ")[0]+'</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                        <!-- @foreach($etap as $e)
                        <option value="{{ $e->nom_etablessement }}">{{ $e->nom_etablessement }}</option>
                        @endforeach
                    </select> -->
                </div>
                <div class="form-group tt">
                    <label for="">selectionner Module</label>
                    <select class=" form-control" name="nom_module" id="mod" required>
                        <option value="9">default </option>
                        <script>
                        var mod = <?php echo $mod; ?> ;
                        var lengt = fil.length;
                        $(document).ready(function() {
                            $("#sem").change(function() {
                                var m = $("#sem option:selected").val();
                                for (i = 0; i < <?php echo $mod; ?>.length; i++) {
                                    $("#ttt").remove();
                                }
                                for (j = 0; j < <?php echo $mod; ?>.length; j++) {
                                    if (mod[j]["nom_se"] == m) {
                                        $("#mod").append('<option id="ttt" value="'+mod[j]["nom_module"]+'">' + mod[j]["nom_module"] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                       <!--  @foreach($mod as $m)
                        <option value="{{$m->id_module}}">{{ $m->nom_module}}->&nbsp;{{$m->nom_etabless}}</option>
                        @endforeach
                    </select> -->
                    <br><br>
                    <div class="form-group tt">
                        <input type="submit" name="btnSubmit" class="btnContact" placeholder="image"
                            value="Supprimer" />
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