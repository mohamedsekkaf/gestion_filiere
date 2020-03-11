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
                @foreach($etap as $etapliss)
                @csrf
                <div class="col-lg-6">
                    <div class="card mb-3 mt-4">
                        <div class="crd-head  text-center"><img src="{{asset('images/')}}/{{$etapliss->image}} "
                                class="card-img-top  roundd" /></div>
                        <div class="card-body">
                            <h3 class="card-title tt"> {{ $etapliss->nom_etablessement}}</h3>
                            <p class="card-text tt"><small class="text-muted"></small> Localisation :
                                {{ $etapliss->local_etablessement}}</p>

                            <a style="display:inline-block;" href="{{ url('/info')}}/{{$etapliss->nom_etablessement}}">
                                <p class="hover"> Afficher les Filieres </p>
                            </a>
                            <a href="{{ url('/showdeplome')}}/{{$etapliss->nom_etablessement}}">
                                <p class="card-text">Afficher les deplomes</p>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{ $etap->links()}}
    </section>
    <section class="contact contact--bg">
        <div class="container">
            <div class="page-section text-center">
                <h2 class="page-section__title--white">Les établissements de Université chouaib doukkali</h2>
                <p class="page-section__paragraph--white">Gérer Le Site </p>
                <a class="button button--hover" href="{{ url('/ajouter')}}">LETS GO</a>
            </div>
        </div>
    </section>
</div>
<form action="{{ url('/ajouter') }}" method="POST" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="container">
        <div class="row">
            <form action=""></form>
            <div class="col-lg-4">
                <label for="">Votre Nom et Prenom <span style="color:red;">*</span></label>
                <input name="nom" class="form-control" type="text">
            </div>
            <div class="col-lg-4">
                <label for="">Votre Email <span style="color:red;">*</span></label>
                <input name="email" class="form-control" type="text">
            </div>
            <div class="col-lg-4">
                <label for="">Votre Commentaire <span style="color:red;">*</span></label>
                <input name="comment" class="form-control" type="text">
            </div>
            <div class="col-lg-4">
                <input class="form-control" value="Add Comment" type="submit">
            </div>
        </div>
    </div>
    <div class="col-12">
               @foreach($errors->all() as $err)
                     <div class="alert alert-danger mt-5">
                     {{$err}}
                     </div>
               @endforeach
               </div>
</form>
<div class="container">
    <div class="row">
        <div class="col-12">
            @foreach($comment as $c)
            <span>{{ $c->nom }}</span>
            @endforeach
        </div>
    </div>
    {{ $comment->links()}}
</div>


@endsection