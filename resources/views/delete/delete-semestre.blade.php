@extends("layouts/mylayout")
@section("content")
<!--<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Supprimer Semestre</h3>
  <form action="{{ url('/delete/delete-semestre') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
         <table>
          <tr>
          <td  style="width:20%" >selectionner Filiere</td>
          <td>
          <select style="width:60%" name="nom_s" class="form-control" required>
           <option value="">default </option>
               @foreach($semestre as $e)
              <option value=" {{ $e->nom_s }}">{{ $e->nom_s }}->&nbsp;{{$e->nom_etabless}}</option>
              @endforeach
             </select>
             </td>
            <tr><td><br></td></tr>
            <tr>
            <td></td>
             <td>
                    <input class="btn-primary btn" type="submit" value="Supprimer" name="btn" class="form-control">
             </td>
             </tr>
           </tr>

           </table>
                 
</form>
  </div>
</div>
</div><!-- fin col
</div><!-- fin row
</div><!-- fin container-->
<br><br>
   
<style>
body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
</style>
<div class="container contact-form">
            <div class="contact-image">
                <img style="transform: rotate(0deg);" src="{{asset('image/rubbish.png')}}" alt="rocket_contact"/>
            </div>
            <form action="{{ url('/delete/delete-semestre') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Supprimer Semestre</h3>
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group tt">
                    <label for="">Nombre de l'établissement</label>
                    <select class="form-control" name="nom_etabless" id="test" required>
                        <option value="">default </option>
                        @foreach($etap as $fil)
                        <option value="{{ $fil->nom_etablessement }}">{{ $fil->nom_etablessement }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group tt">
                    <label for="">Nombre de Filiere</label>
                    <select class="form-control" name="nom_fil" id="test1" required>
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
                                }
                                for (j = 0; j < length2; j++) {
                                    if (fil[j]["nom_etabless"] == m) {
                                        $("#test1").append('<option id="t" value='+fil[j]["nom_filiere"]+'>' + fil[j]["nom_filiere"] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                       <!--  @foreach($file as $model)
                        <option value="{{ $model->nom_filiere }}">
                            {{ $model->nom_filiere }}->&nbsp;{{$model->nom_etabless}}</option>
                        @endforeach
                    </select> -->
                </div>
                  <div class="form-group tt">
                    <label for="">selectionner Semestre</label> 
                    <select name="nom_s" class="form-control" id="test2" required>
           <option value="">default </option>
           <script>
                        var s = <?php echo $semestre; ?> ;
                        var lengt = s.length;
                        $(document).ready(function() {
                            $("#test1").change(function() {
                                var m = $("#test1 option:selected").val();
                                for (i = 0; i < length2; i++) {
                                    $("#tt").remove();
                                }
                                for (j = 0; j < lengt; j++) {
                                    if (s[j]["nom_file"] == m) {
                                        $("#test2").append('<option id="tt" value="'+s[j]["nom_s"]+'">Semestre ' + s[j]["nom_s"].split(" ")[0] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
              <!--  @foreach($semestre as $e)
              <option value=" {{ $e->nom_s }}">{{ $e->nom_s }}->&nbsp;{{$e->nom_etabless}}</option>
              @endforeach
             </select> -->
             <br><br>
             <div class="form-group tt">
                            <input type="submit" name="btnSubmit" class="btnContact"  placeholder="image"  value="Supprimer" />        
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
