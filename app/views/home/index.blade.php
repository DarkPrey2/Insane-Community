@extends('layouts.master')

@section('content')
    <section id="content">
@if(Auth::check())
    <div class="alert-box warning radius">L'acces a la page n'est pas autorisé pour les membres connectés <b><a href="{{ URL::to('/compte') }}"> retourner ?</a></b></div>
@else
        <div id="banner">
            <ul>
                <li><h3>Insan3 G4ming</h3></li>
                <li><a class="button tiny radius" href="{{ URL::to('/signin') }}">login</a></li>
                <li><a href="#">Forum</a></li>  
                <li><a href="#">Calendrier</a></li>
                <li><a href="#">vidéos</a></li>
                <li><a href="#">live</a></li>
            </ul>
        </div>
        <div class="row">
            <div id="slider" class="large-8 large-centered columns">
            <ul class="example-orbit" data-orbit>
                <li>
                    <img src="http://lorempicsum.com/simpsons/627/300/4" alt="slide 1" />
                    <div class="orbit-caption">Gaming</div>
                </li>
            </ul>
        </div>
        </div>
        <div class="row">
            <div class="panel">
            <h4>News Articles</h4>
        <?php $select = DB::table('articles')->get();?>
        <?php foreach ($select as $k => $art): ?>
            <a href="#"><h3><?php echo $art->article_name; ?></h3></a><br>
            <p><?php echo $art->article_desc; ?></p>
        <?php endforeach ?> 
    </div>
        </div>
</section>
@stop
@section('footer')
<script>
      $(document).foundation();
</script>
@stop
@endif