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
    <form action="{{ url('/update/update-filiere') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <h3>Modefier Filiere</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group tt ">
                    <label for="">selectionner l'etablissement</label>
                    <select name="" class="form-control" id="etab" required>
                        <option value="">default </option>
                        @foreach($etap as $e)
                        <option value="{{ $e->nom_etablessement }}">{{ $e->nom_etablessement }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group tt ">
                    <label for="">selectionner le Filiere</label>
                    <select name="nom" class=" form-control" id="fil" required>
                        <option value="">default </option>
                        <script>
                        var fil = <?php echo $file; ?> ;
                        var length2 = fil.length;
                        $(document).ready(function() {
                            $("#etab").change(function() {
                                var m = $("#etab option:selected").val();
                                for (i = 0; i < <?php echo $file; ?>.length; i++) {
                                    $("#t").remove();
                                }
                                for (j = 0; j < <?php echo $file; ?>.length; j++) {
                                    if (fil[j]["nom_etabless"] == m) {
                                        $("#fil").append('<option id="t" value="' + fil[j][
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