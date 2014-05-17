@extends('layouts.master')

@section('content')

@if(Auth::check())

          <div id="banner">
            <ul>
                <li><h3>Staff</h3></li>
                <li><a class="button tiny radius" href="{{ URL::to('/logout') }}">logout</a></li>
                <li><a href="{{ URL::to('/compte') }}">Home</a></li>
                <li><a href="{{ URL::to('/article/edit') }}">Éditer un articles</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">uploader une vidéo</a></li>
                <li><a href="#">Live stream</a></li>
            </ul>
        </div>
        <div class="panel">
            <p>Pages des articles</p>
        </div>
        <div class="large-12 large-centered columns panel"> 
   <p><h2>Création d'un article</h2></p>
   <div class="row">
        <div class="large-12 columns">

{{ Form::open(array('action' => 'ArticleController@create')) }}

    {{ Form::label('Nom de l\'article') }}
    <input type="text" name="article_name" class="" id="article_name" placeholder="name">

    {{ Form::label('Description') }}
   <input type="text" name="article_desc" id="article_desc" placeholder="description">

       {{ Form::label('lien de l\'image') }}
   <input type="text" name="link" id="link" placeholder="image">

   {{ Form::label('Article') }}
   <textarea name="article" id="article" cols="20" rows="20"></textarea><br>

    <button class="radius" type="submit">Enregistrer</button>
{{ Form::close() }}
</div>
</div>
</div>
@else
    <div class="alert-box warning radius">L'acces a la page n'est pas autorisé pour les membres connectés <b><a href="{{ URL::to('/') }}"> retourner ?</a></b></div>
@endif
@stop