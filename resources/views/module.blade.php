@extends("layouts/mylayout")

@section("content")

<div class="container">
<div class="row">
    @foreach($module as $mod)
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">Module </h3>
  <h5 class="card-title tt">{{ $mod->nom_module}}</h5>

    <p class="card-text tt"><small class="text-muted"></small> nombre d'element   : {{ $mod->num_element}}</p>

 <a href="http://gestion-fil-estsb.herokuapp.com/element/{{$mod->nom_module}}"><p class="card-text"> Afficher les Element</p></a>
  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->
<br><br><br><br><br><br><br><br>
@endsection
