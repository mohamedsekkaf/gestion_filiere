@extends("layouts/mylayout")
@section("content")
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
    <form action="{{ url('/update/update-semestre') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <h3>Modefier Semestre</h3>
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
                                for (i = 0; i < <?php echo $file; ?>.length; i++) {
                                    $("#t").remove();
                                    $("#tt").remove();
                                }
                                for (j = 0; j < <?php echo $file; ?>.length; j++) {
                                    if (fil[j]["nom_etabless"] == m) {
                                        $("#test1").append('<option id="t" value="'+fil[j]["nom_filiere"]+'">' + fil[j]["nom_filiere"] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                </div>
                <div class="form-group tt">
                    <label for="">Selectionner Semestre</label>
                    <select class="form-control" name="nom_sold" id="test2" required>
                        <option value="">default </option>
                        <script>
                        var s = <?php echo $semestre; ?> ;
                        var lengt = s.length;
                        $(document).ready(function() {
                            $("#test1").change(function() {
                                var m = $("#test1 option:selected").val();
                                for (i = 0; i < <?php echo $semestre; ?>.length; i++) {
                                    $("#tt").remove();
                                }
                                for (j = 0; j < <?php echo $semestre; ?>.length; j++) {
                                    if (s[j]["nom_file"] == m) {
                                        $("#test2").append('<option id="tt" value="'+s[j]["nom_s"]+'">Semestre ' + s[j]["nom_s"].split(" ")[0] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        document.write('</select>');
                        </script>
                    <br>
                    <div class="form-group tt">
                        <label for=""> Nom de Semestre </label>
                        <input class="form-control" name="nom_snew" type="text" required>
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