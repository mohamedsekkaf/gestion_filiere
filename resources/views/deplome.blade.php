@extends("layouts/mylayout")
@section("content")
<div class="main-wrapper">
    <header class="header header--bg">
        <div class="container header__content text-center">
            <img src="{{asset('image/logo.png')}} " height="100" alt="">
        </div>
        <div class="container">
            <div class="header__content text-center">
                <h2 class="header__content__title">Application de gestion des filieres</h2>
                <p class="header__content__paragraph">Ecole superieur de technologie </p>
                @guest
                <a class="button button--margin-right button--hover" href="{{ url('/login')}}">Login</a>
                <a class="button button--hover" href="{{ url('/register')}}">Register</a>
                @else
                <div class="homenav">
                    <a class="button button--hover" href="{{ url('/logout')}}">logout</a>
                </div>
                @endguest
            </div>
        </div>
    </header>
    <section class="service">
        <div class="container">
            <div class="row">
                @foreach($dep as $deplome)
                <div class="col-md-6">
                    <div class="card mb-3 mt-4">
                        <div class="card-body">
                            <h3 class="card-title tt"> Deplome</h3>
                            <h5 class="card-title tt"> {{ $deplome->nom_deplome}}</h5>
                            <p class="card-text tt"><small class="text-muted"></small> Duree de Deplome :
                                {{ $deplome->duree_deplome}}</p>
                        </div>
                    </div>
                </div><!-- fin col-->
                @endforeach
            </div><!-- fin row-->
        </div><!-- fin container-->
    </section>
    <section class="contact contact--bg">
        <div class="container">
            <div class="page-section text-center">
                @foreach($dep as $deplome)
                <h2 class="page-section__title--white">Les Deplome de l'établissement {{ $deplome->nom_etap}}</h2>
                @break
                @endforeach
                <p class="page-section__paragraph--white">Gérer le site</p>
                <a class="button button--hover" href="{{ url('/ajouter')}}">LETS GO</a>
            </div>
        </div>
    </section>
</div>
@endsection