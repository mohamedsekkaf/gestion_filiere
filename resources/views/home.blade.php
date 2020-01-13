
@extends("layouts/mylayout")

@section("content")
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
  
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img  src= "{{asset('image/slider1.jpg')}}" width="100%" height="450" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Title</h3>
                <p>Description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('image/slider2.jpg')}}" width="100%" height="450"  alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Title</h3>
                <p>Description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('image/slider3.jpg')}}" width="100%" height="450"  alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Title</h3>
                <p>Description</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- ================================-->
<div class="container">
<div class="row">
    @foreach($etap as $etapliss)
    @csrf
<div class="col-md-6">
<div class="card mb-3 mt-4">

<div class="crd-head  text-center"><img  src="{{asset('images/')}}/{{$etapliss->image}} " class="card-img-top  round" /></div>
  <div class="card-body">
  <h5 class="card-title">Nom de L'etablessement : {{ $etapliss->nom_etablessement}}</h5>
    <p class="card-text"><small class="text-muted"></small> Localisation  : {{ $etapliss->local_etablessement}}</p>
 <a href="http://127.0.0.1:8000/info/{{$etapliss->id_etablessement}}"><p class="card-text"> Afficher les Filieres </p></a>
 <br>
 <a href="http://127.0.0.1:8000/showdeplome/{{$etapliss->id_etablessement}}"><p class="card-text">Afficher les deplomes</p></a>
  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->
 

@endsection