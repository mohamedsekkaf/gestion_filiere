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
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
    </div>
    <form action="{{ url('/ajouter/ajouter-element') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <h3>Ajouter Element</h3>
        <div class="row">
            <div class="col-md-12">
            <div class="form-group tt">
                    <label for="">Eteblesement</label>
                    <select class="form-control" name="nom_etabless" value="{{ old('nom_etabless')}}" id="etab" required>
                        <option value="">default </option>
                        @foreach($etab as $fil)
                        <option value="{{ $fil->nom_etablessement }}">{{ $fil->nom_etablessement }}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div class="form-group tt">
                <label for="">Fliliere</label>
                    <label for=""><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></label>
                    <select class="form-control" name="nom_fil" value="{{ old('nom_fil')}}" id="fil" required>
                        <option value="">default </option>
                        <script>
                        fil = <?php echo $file; ?> ;
                        var length2 = fil.length;
                        $(document).ready(function() {
                            $("#etab").change(function() {
                                var m = $("#etab option:selected").val();
                                for(i=0 ; i< <?php echo $file; ?>.length ; i++){
                                    $("#tt").remove();
                                    $("#ttt").remove();
                                    $("#t").remove();
                                }
                                for (j = 0; j < <?php echo $file; ?>.length; j++) {
                                    if (fil[j]["nom_etabless"] == m) {
                                        $("#fil").append('<option id="tt" value="'+fil[j]["nom_filiere"]+'">' + fil[j]["nom_filiere"]+
                                            '</option>');
                                    }
                                }
                            });
                        });
                        </script>
                        </select>
                </div>
                <div class="form-group tt">
                    <label for="">Semestre</label>
                    <select class="form-control" name="nom_sem" value="{{ old('nom_sem')}}" id="sem" required>
                        <option value="">default </option>
                        <script>
                        var s = <?php echo $semestre; ?> ;
                        var length2 = s.length;
                        $(document).ready(function() {
                            $("#fil").change(function() {
                                var m = $("#fil option:selected").val();
                                for (i = 0; i < <?php echo $semestre; ?>.length; i++) {
                                    $("#ttt").remove();
                                    $("#t").remove();
                                }
                                for (j = 0; j < <?php echo $semestre; ?>.length; j++) {
                                    if (s[j]["nom_file"] == m) {
                                        $("#sem").append('<option id="ttt" value="'+s[j]["nom_s"]+'">Semestre ' + s[j]["nom_s"].split(" ")[0] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        </script>
                        </select>
                </div>
                <div class="form-group tt">
                    <label for="">Module</label>
                    <select class="form-control" name="nom_mod" value="{{ old('nom_mod')}}" id="mod" required>
                        <option value="">default </option>
                        <script>
                        var mod = <?php echo $mod; ?> ;
                        var length2 = mod.length;
                        $(document).ready(function() {
                            $("#sem").change(function() {
                                var m = $("#sem option:selected").val(); 
                                for (i = 0; i < <?php echo $mod; ?>.length; i++) {
                                    $("#t").remove();
                                }   
                                for (j = 0; j < <?php echo $mod; ?>.length; j++) {
                                    if (mod[j]["nom_se"] == m) {
                                        $("#mod").append('<option id="t" value="'+mod[j]["nom_module"]+'">' + mod[j]["nom_module"] +
                                            '</option>');
                                    }
                                }
                            });
                        });
                        </script>
                        </select>
                </div>
                <div class="form-group tt">
                    <label for="">Element</label>
                    <input type="text" class="form-control" value="{{ old('nom_element')}}" name="nom_element" type="text"
                        value="{{ old('nom_filiere')}}" placeholder="Nom de filiere" id="nom" />
                </div>
                <div class="form-group tt">
                    <label for="">l'horaire</label>
                    <input type="text" class="form-control" name="horaire_element" type="number"
                        value="{{ old('nummodel')}}" placeholder="Nombre de module" id="local" />
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
<script>
                  $('#etab').addEventListener('click',function(){
                                $("#fil").innerHTML="";
                                console.log('polat alemdar');
                            })          
                        </script>
<br><br>
@endsection