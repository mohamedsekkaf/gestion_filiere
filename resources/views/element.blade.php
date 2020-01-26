\
@extends("layouts/mylayout")

@section("content")

<div class="container">
<div class="row">
    @foreach($element as $elem)
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Element</h3>
  <h5 class="card-title tt">{{ $elem->nom_element}}</h5>
  
  <h5 class="card-title tt">L'horaire de l'element : {{ $elem->horaire_element}}</h5>

  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->
<br><br><br><br><br><br><br><br>
@endsection