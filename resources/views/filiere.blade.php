
@extends("layouts/mylayout")

@section("content")

<div class="container">
<div class="row">
    @foreach($fil as $feliere)
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt"> Filiere </h3>
  <h5 class="card-title tt"> {{ $feliere->nom_filiere}}</h5>
    <p class="card-text tt"><small class="text-muted"></small> nombre de module  : {{ $feliere->nummodel}}</p>

 <a href="http://127.0.0.1:8000/semestre/{{$feliere->nom_filiere}}"><p class="card-text">Afficher les Semestre</p></a>
  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->

@endsection