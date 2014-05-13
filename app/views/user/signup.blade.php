@extends('layouts.master')

@section('content')
@if(Auth::check())
    <div class="alert-box warning radius">L'acces a la page n'est pas autorisé pour les membres connectés <b><a href="{{ URL::to('/compte') }}"> retourner ?</a></b></div>
@else
<div class="large-6 large-centered columns panel"> 
   <p>{{'Bienvenue sur la page d\'inscription'}}</p>
   <div class="row">
   <div class="large-6 columns">  
{{ Form::open(array('action' => 'UserController@signup')) }}
    {{ Form::label('Nom de compte') }}
    <input type="text" name="username" class="" id="username" placeholder="Nom du compte">

    {{ Form::label('Mot de passe') }}
   <input type="password" name="password" id="password" placeholder="mot de passe">

    <button class="radius" type="submit">M'inscrire</button>
{{ Form::close() }}
</div>
</div>
</div>
@stop
@endif