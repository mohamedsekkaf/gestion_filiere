
@extends("layouts/mylayout")

@section("content")
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
<?php
$a=0;
        foreach($etap as $etapliss){
      echo '<li data-target="#carouselId" data-slide-to="'.$a.'" class="active"></li>';
      $a++;
        }
   ?>
    </ol>
  
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img  src= "{{asset('image/slider1.jpg')}}" width="100%" height="450" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                
            </div>
        </div>
        @foreach($etap as $etapliss)
        <div class="carousel-item">
            <img src="{{asset('images/')}}/{{$etapliss->image}}" width="100%" height="450"  alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3 style=" color:red">{{$etapliss->nom_etablessement}}</h3>
            </div>
        </div>
        @endforeach
     
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span style=" color:red" class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span style=" color:red" class="carousel-control-next-icon" aria-hidden="true"></span>
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
  <h5 class="card-title">Nom de L'Etablessement : {{ $etapliss->nom_etablessement}}</h5>
    <p class="card-text"><small class="text-muted"></small> Localisation  : {{ $etapliss->local_etablessement}}</p>
 <a href="http://gestion-fil-estsb.herokuapp.com/info/{{$etapliss->id_etablessement}}"><p class="hover"> Afficher les Filieres </p></a>
 <br>
 <a href="http://gestion-fil-estsb.herokuapp.com/showdeplome/{{$etapliss->id_etablessement}}"><p class="card-text">Afficher les deplomes</p></a>
  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->
 

@endsection