@extends("layouts/mylayout")

@section("content")

<div class="container">
<div class="row">
    @foreach($sem as $s)
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">S {{ $s->nom_s}}</h3>
  <h5 class="card-title tt"> {{ $s->nom_etabless}}</h5>
 <a href="http://127.0.0.1:8000/modul/{{$s->nom_s}}"><p class="card-text"> Afficher les Module</p></a>
  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->

@endsection
