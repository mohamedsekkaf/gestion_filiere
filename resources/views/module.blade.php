@extends("layouts/mylayout")

@section("content")

<div class="container">
<div class="row">
    @foreach($module as $mod)
<div class="col-md-6">
<div class="card mb-3 mt-4">
<div class="crd-head  text-center"><img  src="{{asset('image/est.png')}}" class="card-img-top  round" /></div>
  <div class="card-body">
  <h5 class="card-title">{{ $mod->nom_module}}</h5>

    <p class="card-text"><small class="text-muted"></small> nombre de module  : {{ $mod->num_element}}</p>

 <a href="http://127.0.0.1:8000/modul/{{$mod->id_module}}"><p class="card-text">Learn more</p></a>
  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->

@endsection
