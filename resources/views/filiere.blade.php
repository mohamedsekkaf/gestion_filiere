
@extends("layouts/mylayout")

@section("content")

<div class="container">
<div class="row">
    @foreach($fil as $feliere)
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt"> Filiere </h3>
  <h5 class="card-title tt"> {{ $feliere->nom_filiere}}</h5>
    <p class="card-text tt"><small class="text-muted"></small> nombre de module  : {{ $feliere->nummodel}}</p>

 <a href="http://gestion-fil-estsb.herokuapp.com/semestre/{{$feliere->nom_filiere}}"><p class="card-text">Afficher les Semestre</p></a>
  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->
<br><br><br><br>
<br><br><br><br>


<div class="main-wrapper">
    <header class="header header--bg">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header"> 
            <a class="navbar-brand" href="#">Université chouaib doukkali</a>
          </div>
        </nav>
        <div class="header__content text-center">
          <h2 class="header__content__title">Application de gestion des filieres</h2>
          <p class="header__content__paragraph">Ecole superieur de technologie </p>
          @guest
          <a class="button button--margin-right button--hover" href="{{ url('/login')}}">Login</a>
          <a class="button button--hover" href="{{ url('/register')}}" >Register</a>
          @else
          <div class="homenav">
            <a class="button button--hover" href="{{ url('/logout')}}" >logout</a>
                </div>
          @endguest
        </div>
      </div>
    </header>
    
    <section class="service">
        
    <div class="container">
        <div class="row">
    @foreach($etap as $etapliss)
    @csrf
    

    <div class="container">
<div class="row">
    @foreach($fil as $feliere)
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt"> Filiere </h3>
  <h5 class="card-title tt"> {{ $feliere->nom_filiere}}</h5>
    <p class="card-text tt"><small class="text-muted"></small> nombre de module  : {{ $feliere->nummodel}}</p>

 <a href="http://gestion-fil-estsb.herokuapp.com/semestre/{{$feliere->nom_filiere}}"><p class="card-text">Afficher les Semestre</p></a>
  </div>
</div>
</div><!-- fin col-->
@endforeach
</div><!-- fin row-->
</div><!-- fin container-->
{{ $fil->links()}}
    </section>
    
    <section class="contact contact--bg">
      <div class="container">
        <div class="page-section text-center">
          <h2 class="page-section__title--white">Les Filieres de Université chouaib doukkali</h2>
          <p class="page-section__paragraph--white">Gérer le site</p>
          <a class="button button--hover" href="http://gestion-fil-estsb.herokuapp.com/ajouter">LETS GO</a>
        </div>
      </div>
    </section>
  
      
 
   
  </div>

@endsection