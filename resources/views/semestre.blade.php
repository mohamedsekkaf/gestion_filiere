@extends("layouts/mylayout")

@section("content")
<!--
<div class="container">
<div class="row">
    @foreach($sem as $s)
<div class="col-md-6">
<div class="card mb-3 mt-4">
  <div class="card-body">
  <h3 class="card-title tt">S {{ $s->nom_s}}</h3>
  <h5 class="card-title tt"> {{ $s->nom_etabless}}</h5>
 <a href="http://127.0.0.1:8000/modul/{{$s->nom_s}}"><p class="card-text"> Afficher les Module</p></a>
  </div>
</div>
</div>
@endforeach
</div>
</div>-->


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
                @foreach($sem as $s)
                @break
                <div class="col-md-6">
                    <div class="card mb-3 mt-4">
                        <div class="card-body">
                            <h3 class="card-title tt"></h3>
                            <h5 class="card-title tt"> </h5>
                            <a href="{{ url('/modul')}}/{{$s->nom_s}}">
                                <p class="card-text">/p>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <?php
    foreach($sem as $s){
        echo '<div class="card col-12">';
        echo '<h1> Semestre '.substr($s->nom_s,0,1) .' '.$s->nom_etabless .'</h1>';
        foreach($mod as $m ){
            if($s->nom_s==$m->nom_se){
                echo '<h3 class="te">'.$m->nom_module.'</h3>';
            }

            foreach($elem as $e){
                if($m->nom_module==$e->nom_mod && $s->nom_s==$e->nom_sem){
                    echo '<h5 class="tee">'.$e->nom_element.'</h5>';
                }
            }
        }
        echo '</div>';
    }
    
    /* foreach($sem as $s){
        echo '<h1>'.$s->nom_s.'</h1>';
        foreach($mod as $m ){
            if($s->nom_s==$m->nom_se && $s->nom_file==$m->nom_fil){
                echo '<h3 class="te">'.$m->nom_module.'</h3>';
            }
            foreach($elem as $e){
                if($m->nom_module==$e->nom_mod && $m->nom_se==$e->nom_sem){
                    echo '<h5 class="tee">'.$e->nom_element.'</h5>';
                }
            }
        }
    } */
    ?>
    <a href="{{ url('/pdf')}}/{{$s->nom_file}}">Télécharger PDF</a>

    <section class="contact contact--bg">
        <div class="container">
            <div class="page-section text-center">
                @foreach($sem as $s)
                <h2 class="page-section__title--white">Les Semestres de Feliere {{ $s->nom_file}} </h2>
                @break
                @endforeach
                <p class="page-section__paragraph--white">Gérer le site</p>
                <a class="button button--hover" href="{{ url('/ajouter')}}">LETS GO</a>
            </div>
        </div>
    </section>


</div>

@endsection