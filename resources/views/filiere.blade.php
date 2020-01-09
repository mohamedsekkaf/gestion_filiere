
@extends("layouts/mylayout")

@section("content")

<div class="container">
<div class="row">
    @foreach($fil as $feliere)
<div class="col-md-6">
<div class="card mb-3 mt-4">
<div class="crd-head  text-center"><img  src="{{asset('image/est.png')}}" class="card-img-top  round" /></div>
  <div class="card-body">
  <h5 class="card-title">{{ $feliere->nom_filiere}}</h5>

    <p class="card-text"><small class="text-muted"></small> nombre de module  : {{ $feliere->nummodel}}</p>

 <a href="http://127.0.0.1:8000/modul/{{$feliere->id_filiere}}"><p class="card-text">Learn more</p></a>
  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->

@endsection