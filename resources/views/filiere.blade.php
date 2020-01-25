
@extends("layouts/mylayout")

@section("content")

<div class="container">
<div class="row">
    @foreach($fil as $feliere)
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Nom de filiere : {{ $feliere->nom_filiere}}</h5>

    <p class="card-text"><small class="text-muted"></small> nombre de module  : {{ $feliere->nummodel}}</p>

 <a href="http://gestion-fil-estsb.herokuapp.com/modul/{{$feliere->nom_filiere}}"><p class="card-text">Afficher les Module</p></a>
  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->

@endsection