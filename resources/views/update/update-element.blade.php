@extends("layouts/mylayout")
@section("content")
<!--<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Modefier Element</h3>
  <form action="{{ url('/update/update-element') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
             <table>
             <tr>
             <td style="width:14%">Selectionner Element</td>
             <td>
             <select style="width:100%" name="id_element" class="form-control" required>
           <option value="">default </option>
               @foreach($elem as $e)
              <option value=" {{ $e->id_element }}"> {{ $e->nom_element }}->&nbsp;{{$e->nom_etabless}}</option>
              @endforeach
             </select>
             </td>
             </tr>
             <tr><td><br></td></tr>
                  <tr>
                     <td>Nom de l'element </td>
                     <td><input class="form-control" name="nom_element" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td >L'horaire de l'element </td>
                     <td><input class="form-control" name="horaire_element" type="text" required></td>
                  </tr>
                  <tr><td><br></td></tr>
                  <tr>
                     <td> </td>
                     <td><input class="btn-primary btn" type="submit" value="Update" name=""></td>
                  </tr>
               </table>
</form>
  </div>
</div>
</div>
</div>
</div>-->
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
    <form action="{{ url('/update/update-element') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <h3>Modefier Element</h3>
        <div class="row">
            <div class="col-md-12">
            <div class="form-group tt">
                    <label for="">selectionner l'etablissement</label>
                    <select name="" class="form-control" id="test" required>
                        <option value="">default </option>
                        @foreach($etap as $e)
                        <option value="{{ $e->nom_etablessement }}"> {{ $e->nom_etablessement }}
                        </option>
                        @endforeach
                    </select>
                </div>
                 <div class="form-group tt">
                    <label for="">selectionner la filiere</label>
                    <select name="" class="form-control" id="test1" required>
                        <option value="">default </option>
                        <script>
                        var fil = <?php echo $file; ?> ;
                        var length2 = fil.length;
                        $(document).ready(function() {
                            $("#test").change(function() {
                                var m = $("#test option:selected").val();
                                for (i = 0; i < length2; i++) {
                                    $("#t").remove();
                                    $("#tt").remove();
                                    $("#ttt").remove();
                                    $("#tttt").remove();
                                }
                                for (j = 0; j < length2; j++) {
                                    if (fil[j]["nom_etabless"] == m) {
                                        $("#test1").append('<option id="t" value="'+fil[j]["nom_filiere"] +'">' + fil[j]["nom_filiere"] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                        <!-- @foreach($file as $e)
                        <option value="{{ $e->nom_filiere }}"> {{ $e->nom_filiere }}
                        </option>
                        @endforeach
                    </select> -->
                </div>
                <div class="form-group tt">
                    <label for="">selectionner Semestre</label>
                    <select name="" class="form-control" id="test2" required>
                        <option value="">default </option>
                        <script>
                        var s = <?php echo $semestre; ?> ;
                        var lengt = s.length;
                        $(document).ready(function() {
                            $("#test1").change(function() {
                                var m = $("#test1 option:selected").val();
                                for (i = 0; i < length2; i++) {
                                    $("#tt").remove();
                                    $("#ttt").remove();
                                    $("#tttt").remove();
                                }
                                for (j = 0; j < lengt; j++) {
                                    if (s[j]["nom_file"] == m) {
                                        $("#test2").append('<option id="tt" value="'+s[j]["nom_s"] +'">Semestre ' + s[j]["nom_s"].split(" ")[0] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                        <!-- @foreach($semestre as $e)
                        <option value="{{ $e->nom_s }}"> {{ $e->nom_s }}
                        </option>
                        @endforeach
                    </select> -->
                </div> 
                <div class="form-group tt">
                    <label for="">selectionner Module</label>
                    <select name="" class="form-control" id="test3" required>
                        <option value="">default </option>
                        <script>
                        var mod = <?php echo $mod; ?> ;
                        var lengt = mod.length;
                        $(document).ready(function() {
                            $("#test2").change(function() {
                                var m = $("#test2 option:selected").val();
                                for (i = 0; i < length2; i++) {
                                    $("#ttt").remove();
                                    $("#tttt").remove();
                                }
                                for (j = 0; j < lengt; j++) {
                                    if (mod[j]["nom_se"] == m) {
                                        $("#test3").append('<option id="ttt" value="'+mod[j]["nom_module"]+'">' + mod[j]["nom_module"] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                        <!-- @foreach($mod as $e)
                        <option value="{{ $e->nom_module }}"> {{ $e->nom_module }}
                        </option>
                        @endforeach
                    </select> -->
                </div>
                
                <div class="form-group tt">
                    <label for="">selectionner le Element</label>
                    <select name="id_element" class="form-control" id="test4" required>
                        <option value="">default </option>
                        <script>
                        var e = <?php echo $elem; ?> ;
                        var lengt = e.length;
                        $(document).ready(function() {
                            $("#test3").change(function() {
                                var m = $("#test3 option:selected").val();
                                for (i = 0; i < length2; i++) {
                                    $("#tttt").remove();
                                }
                                for (j = 0; j < lengt; j++) {
                                    if (e[j]["nom_mod"] == m) {
                                        $("#test4").append('<option id="tttt" value="'+e[j]["nom_element"]+'">' + e[j]["nom_element"] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                       <!--  @foreach($elem as $e)
                        <option value="{{ $e->id_element }}">{{ $e->nom_element }}
                        </option>
                        @endforeach
                    </select> -->
                </div>
                <br>
                <div class="form-group tt">
                    <label for=""> Nom de l'element </label>
                    <input class="form-control" name="nom_element" type="text" required>
                </div>


                <div class="form-group tt">
                    <label for="">L'horaire de l'element </label>
                    <input class="form-control" name="horaire_element" type="text" required>

                </div>


                <div class="form-group tt">
                    <input type="submit" name="btnSubmit" class="btnContact" placeholder="image" value="Modefier" />
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