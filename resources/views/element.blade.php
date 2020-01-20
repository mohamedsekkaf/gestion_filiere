\
@extends("layouts/mylayout")

@section("content")

<div class="container">
<div class="row">
    @foreach($element as $elem)
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h5 class="card-title">Nom de l'element : {{ $elem->nom_element}}</h5>
  
  <h5 class="card-title">L'horaire de l'element : {{ $elem->horaire_element}}</h5>

  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->

@endsection