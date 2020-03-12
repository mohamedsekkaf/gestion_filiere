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
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="" />
    </div>
    <form action="{{ url('/ajouter/ajouter-module') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <h3>Ajouter Module</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group tt">
                    <label for="">Eletablessement</label>
                    <select class="form-control" name="nom_etabless" value="{{ old('nom_etabless')}}" id="etab" required>
                        <option value="">default </option>
                        @foreach($etab as $fil)
                        <option value="{{ $fil->nom_etablessement }}">{{ $fil->nom_etablessement }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group tt">
                    <label for=""> filiere </label>
                    <select class="form-control" name="nom_fil" value="{{ old('nom_fil')}}" id="fil" required>
                        <option value="">default </option>
                        <script>
                        var fil = <?php echo $file; ?> ;
                        var length2 = fil.length;
                        $(document).ready(function() {
                            $("#etab").change(function() {
                                var m = $("#etab option:selected").val();
                                for (i = 0; i < <?php echo $file; ?>.length; i++) {
                                    $("#ttt").remove();
                                    $("#tt").remove();
                                }
                                for (j = 0; j < <?php echo $file; ?>.length; j++) {
                                    if (fil[j]["nom_etabless"] == m) {
                                        $("#fil").append('<option id="ttt" value="'+fil[j]["nom_filiere"]+'">'+fil[j]["nom_filiere"]+'</option>');
                                    }
                                }
                            });
                        });
                        </script>
                        </select>
                </div>
                <div class="form-group tt">
                    <label for="">Semester</label>
                    <select class="form-control" name="nom_se" value="{{ old('nom_se')}}" id="sem" required>
                        <option value="">default </option>
                        <script>
                        var s = <?php echo $semestre; ?> ;
                        var length2 = s.length;
                        $(document).ready(function() {
                            $("#fil").change(function() {
                                var m = $("#fil option:selected").val();
                                for (i = 0; i < <?php echo $semestre; ?>.length; i++) {
                                    $("#tt").remove();
                                }
                                for (j = 0; j < <?php echo $semestre; ?>.length; j++) {
                                    if (s[j]["nom_file"] == m) {
                                        $("#sem").append('<option id="tt" value="'+s[j]["nom_s"]+'">Semestre '+s[j]["nom_s"].split(" ")[0]+'</option>');
                                    }
                                }
                            });
                        });
                        </script>
                        </select>
                </div>
                <div class="form-group tt">
                    <label for="">Module</label>
                    <input type="text" class="form-control" name="nom_module" type="text" value="{{ old('nom_module')}}"
                        placeholder="Nom de Module" id="nom" />
                </div>
                <div class="form-group tt">
                    <label for="">Nombre de l'element</label>
                    <input class="form-control" name="num_element" type="number" value="{{ old('num_element')}}"
                        placeholder="Nombre de module" id="local" />
                </div>
                <div class="form-group tt">
                    <input type="submit" name="btnSubmit" class="btnContact" placeholder="image" value="Ajouter" />
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
<br><br>
@endsection