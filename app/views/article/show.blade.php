@extends('layouts.master')

@section('content')

@if(Auth::check())

          <div id="banner">
            <ul>
                <li><h3>Staff</h3></li>
                <li><a class="button tiny radius" href="{{ URL::to('/logout') }}">logout</a></li>
                <li><a href="{{ URL::to('/compte') }}">Home</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">uploader une vidéo</a></li>
                <li><a href="#">Live stream</a></li>
            </ul>
        </div>
        <div class="panel">
          <p>salut ici les articles</p>
        </div>
@else
    <div class="alert-box warning radius">L'acces a la page n'est pas autorisé pour les membres connectés <b><a href="{{ URL::to('/') }}"> retourner ?</a></b></div>
@endif
@stop
