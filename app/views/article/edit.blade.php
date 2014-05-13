@extends('layouts.master')

@section('content')

@if(Auth::check())

          <div id="banner">
            <ul>
                <li><h3>Staff</h3></li>
                <li><a class="button tiny radius" href="{{ URL::to('/logout') }}">logout</a></li>
                <li><a href="{{ URL::to('/compte') }}">Home</a></li>
                <li><a href="#">Éditer un articles</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">uploader une vidéo</a></li>
                <li><a href="#">Live stream</a></li>
            </ul>
        </div>
        <div class="panel">
          <p>id = <?php $_GET['id']; ?>
        </div>
@else
    <div class="alert-box warning radius">L'acces a la page n'est pas autorisé pour les membres connectés <b><a href="{{ URL::to('/') }}"> retourner ?</a></b></div>
@endif
@stop


Au cours de l'année de Terminale nous avons eu pour but de realiser un projet
Un projet complet qui à pour objectif d'être utilisé dans la vie courante
Mais qui doit correspondre a des criteres precis


