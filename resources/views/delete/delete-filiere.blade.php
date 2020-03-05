@extends("layouts/mylayout")
@section("content")
<!--<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Modefier Filiere </h5>
  <form action="{{ url('/delete/delete-filiere') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
         @csrf
          <table>
          <tr>
          <td  style="width:20%" >selectionner Filiere</td>
          <td>
                        <select style="width:80%" name="id_filiere" class=" form-control">
                    <option value="0">default </option>
                        @foreach($file as $e)
                        <option value=" {{ $e->id_filiere }}">{{ $e->nom_filiere }}->&nbsp;{{$e->nom_etabless}}</option>
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
            <form action="{{ url('/delete/delete-filiere') }}"  method="POST" enctype="multipart/form-data" >
              @method('POST')
               @csrf
                <h3>Supprimer Filiere</h3>
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
                  <div class="form-group tt">
                    <label for="">selectionner Filiere</label> 
          
                    <select  name="id_filiere" class=" form-control" required id="test1">
                    <option value="0">default </option>
                    <script>
                        var fil = <?php echo $file; ?> ;
                        var length2 = fil.length;
                        $(document).ready(function() {
                            $("#test").change(function() {
                                var m = $("#test option:selected").val();
                                for (i = 0; i < <?php echo $file; ?>.length; i++) {
                                    $("#t").remove();
                                }
                                for (j = 0; j < length2; j++) {
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
                      <!--   @foreach($file as $e)
                        <option value=" {{ $e->id_filiere }}">{{ $e->nom_filiere }}->&nbsp;{{$e->nom_etabless}}</option>
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
