
@extends("layouts/mylayout")

@section("content")

<div class="container">
<div class="row">
    @foreach($dep as $deplome)
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt"> Deplome</h3>
  <h5 class="card-title tt"> {{ $deplome->nom_deplome}}</h5>

    <p class="card-text tt"><small class="text-muted"></small> Duree de Deplome  : {{ $deplome->duree_deplome}}</p>
  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->

@endsection