@extends('layouts.master')

@section('content')

@if(Auth::check())

          <div id="banner">
            <ul>
                <li><h3>Staff</h3></li>
                <li><a class="button tiny radius" href="{{ URL::to('/logout') }}">logout</a></li>
                <li><a href="{{ URL::to('/article') }}">Crée un article</a></li>
                <li><a href="#">Éditer un articles</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">uploader une vidéo</a></li>
                <li><a href="#">Live stream</a></li>
            </ul>
        </div>
        <div class="panel">
        <?php $select = DB::table('articles')->get();?>
        <?php foreach ($select as $k => $art): ?>
            <?php echo ('<a href="article/'.$art->id.'/edit">'); ?><h3><?php echo $art->article_name; ?></h3><br>
            <p><?php echo $art->article_desc; ?></p>
        <?php endforeach ?>
        </div>
@else
    <div class="alert-box warning radius">L'acces a la page n'est pas autorisé pour les membres connectés <b><a href="{{ URL::to('/compte') }}"> retourner ?</a></b></div>
@endif
@stop