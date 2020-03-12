@extends('layouts/mylayout')
@section('content')
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
                <div class="col-12">
                    <h3 style="text-align:center;"> Ajouter Etablissement ou Filiere ou <br> Module ou Element ou
                        Diplôme </h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="head d-flex justify-content-center">
                <div class="row" style="display: block!important;">
                    <a href="{{asset('/ajouter/ajouter-etablessement')}}"><img class="circle"
                            src="{{ asset('image/school.png') }}" data-fleep="tooltip" data-placement="bottom"
                            data-original-title="Ajouter Etablissement" data-toggle="modal" /></a>
                    <a href="{{asset('/ajouter/ajouter-filiere')}}"> <img class="circle"
                            src="{{ asset('image/filiere.png') }}" data-toggle="modal" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Ajouter Filiere" /></a>
                    <a href="{{asset('/ajouter/ajouter-semestre')}}"> <img class="circle"
                            src="{{ asset('image/semestre.png') }}" data-toggle="modal" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Ajouter semestre" /></a>
                    <a href="{{asset('/ajouter/ajouter-module')}}"><img class="circle"
                            src="{{ asset('image/module.png') }}" data-toggle="modal" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Ajouter Modele" /></a>
                    <a href="{{asset('/ajouter/ajouter-element')}}"><img class="circle"
                            src="{{ asset('image/cour.png') }}" data-toggle="modal" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Ajouter Element" /></a>
                    <a href="{{asset('/ajouter/ajouter-deplome')}}"><img class="circle"
                            src="{{ asset('image/diploma1.png') }}" data-fleep="tooltip" data-placement="bottom"
                            data-original-title="Ajouter Diplôme" data-toggle="modal" /></a>
                    <!-- data-target="#deplome" -->
                </div>
            </div>
            <!--fin class hread -->
        </div><!-- fi container -->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 style="text-align:center;"> Modifier Etablissement ou Filiere ou <br> Module ou Element ou
                        Diplôme </h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="head d-flex justify-content-center">
                <div class="row" style="display: block!important;">
                    <a href="{{asset('/update/update-etablessement')}}"><img class="circle"
                            src="{{ asset('image/school.png') }}" data-fleep="tooltip" data-placement="bottom"
                            data-original-title="Modefier Etablissement" data-toggle="modal" data-target="" /></a>
                    <a href="{{asset('/update/update-filiere')}}"> <img class="circle"
                            src="{{ asset('image/filiere.png') }}" data-toggle="modal" data-target=""
                            data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Filiere" /></a>
                    <a href="{{asset('/update/update-semestre')}}"> <img class="circle"
                            src="{{ asset('image/semestre.png') }}" data-toggle="modal" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Modefier semestre" /></a>
                    <a href="{{asset('/update/update-module')}}"><img class="circle"
                            src="{{ asset('image/module.png') }}" data-toggle="modal" data-target=""
                            data-fleep="tooltip" data-placement="bottom" data-original-title="Modefier Modele" /></a>
                    <a href="{{asset('/update/update-element')}}"><img class="circle"
                            src="{{ asset('image/cour.png') }}" data-toggle="modal" data-target="" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Modefier Element" /></a>
                    <a href="{{asset('/update/update-deplome')}}"><img class="circle"
                            src="{{ asset('image/diploma1.png') }}" data-fleep="tooltip" data-placement="bottom"
                            data-original-title="Modefier Diplôme" data-toggle="modal" data-target="" /></a>

                </div>
            </div>
            <!--fin class hread -->
        </div><!-- fi container -->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 style="text-align:center;"> Supprimer Etablissement ou Filiere ou <br> Module ou Element ou
                        Diplôme </h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="head d-flex justify-content-center">
                <div class="row" style="display: block!important;">
                    <a href="{{asset('/delete/delete-etablessement')}}"><img class="circle"
                            src="{{ asset('image/school.png') }}" data-fleep="tooltip" data-placement="bottom"
                            data-original-title="Supprimer Etablissement" data-toggle="modal" data-target="" /></a>
                    <a href="{{asset('/delete/delete-filiere')}}"> <img class="circle"
                            src="{{ asset('image/filiere.png') }}" data-toggle="modal" data-target=""
                            data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Filiere" /></a>
                    <a href="{{asset('/delete/delete-semestre')}}"> <img class="circle"
                            src="{{ asset('image/semestre.png') }}" data-toggle="modal" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Supprimer semestre" /></a>
                    <a href="{{asset('/delete/delete-module')}}"><img class="circle"
                            src="{{ asset('image/module.png') }}" data-toggle="modal" data-target=""
                            data-fleep="tooltip" data-placement="bottom" data-original-title="Supprimer  Modele" /></a>
                    <a href="{{asset('/delete/delete-element')}}"><img class="circle"
                            src="{{ asset('image/cour.png') }}" data-toggle="modal" data-target="" data-fleep="tooltip"
                            data-placement="bottom" data-original-title="Supprimer  Element" /></a>
                    <a href="{{asset('/delete/delete-deplome')}}"><img class="circle"
                            src="{{ asset('image/diploma1.png') }}" data-fleep="tooltip" data-placement="bottom"
                            data-original-title="Supprimer  Diplôme" data-toggle="modal" data-target="" /></a>
                </div>
            </div>
            <!--fin class hread -->
        </div><!-- fi container -->
    </section>
</div>
<label class="tt" for="">Supprimer Commentaire</label>
<form action="{{ url('/deletecomment') }}" class="form-control" method="POST" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <select name="nom" id="">
        @foreach($comment as $com)
        <option value="{{$com->comment}}">{{$com->nom}}</option>
        @endforeach
    </select>
    <input type="submit" class="form-control">
</form>
@endsection
<script>
$(function() {
    $('[data-fleep = "tooltip"]').tooltip()
})
</script>