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
    <form action="{{ url('/ajouter/ajouter-semestre') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <h3>Ajouter Semestre</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group tt">
                    <label for="">L'établissement</label>
                    <td style="text-align:center;">
                        <select class="form-control" name="nom_etabless" value="{{ old('nom_etabless')}}" id="etab">
                            <option value="">default </option>
                            @foreach($etab as $fil)
                            <option value="{{ $fil->nom_etablessement }}"> {{ $fil->nom_etablessement }}</option>
                            @endforeach
                            <script>

                            </script>
                        </select>
                </div>
                <div class="form-group tt">
                    <label for="">filiere</label>
                    <select class="form-control" name="nom_file" value="{{ old('nom_file')}}" id="fil">
                        <option value="">default </option>
                        <script>
                        var fil = <?php echo $file; ?> ;
                        var length2 = fil.length;
                        $(document).ready(function() {
                            $("#etab").change(function() {
                                var m = $("#etab option:selected").val();
                                for (i = 0; i < <?php echo $file; ?>.length; i++) {
                                    $("#tt").remove();
                                }
                                for (j = 0; j < <?php echo $file; ?>.length; j++) {
                                    if (fil[j]["nom_etabless"] == m) {
                                        $("#fil").append('<option id="tt" value="'+fil[j]["nom_filiere"]+'">'+fil[j]["nom_filiere"]+'</option>');
                                    }
                                }
                            });
                        });
                        </script>
                    </select>
                </div>
                <div class="form-group tt">
                    <label for="">Semestre</label>
                    <input type="text" class="form-control"  name="nom_s" value="{{ old('nom_s')}}"
                        placeholder="Nom de Semestre" id="" />
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

</script>

<br><br>
@endsection