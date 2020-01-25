@extends("layouts/mylayout")

@section("content")

<div class="container">
<div class="row">
    @foreach($sem as $s)
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">S {{ $s->nom_s}}</h5>
  <h5 class="card-title">S {{ $s->nom_fil}}</h5>
  <h5 class="card-title"> {{ $s->nom_etabless}}</h5>
 <a href="http://gestion-fil-estsb.herokuapp.com/semestre/{{$s->nom_s}}"><p class="card-text"> Afficher les Module</p></a>
  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->

@endsection
