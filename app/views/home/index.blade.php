@extends('layouts.master')

@section('content')
    <section id="content">
@if(Auth::check())
    <div class="alert-box warning radius">L'acces à la page n'est pas autorisé pour les membres connectés <b><a href="{{ URL::to('/compte') }}"> retourner ?</a></b></div>
@else
      
      <!-- Debut page -->

    <div class="row">
    
    <!-- Debut menu -->

    <div class="row">
        <div id="header">
          <a href="#"><h3>Insane Streaming</h3></a>
        <ul>
            <li><p><a href="#">Home<span>Nop désolé</span></a></p></li>
            <li><a href="#">Stream<span>Stream live</span></a></li>
            <li><a href="#">Forum<span>Bientôt</span></a></li>
            <li><a href="#">Articles<span>les news du site</span></a></li>
            <li><a href="#" data-reveal-id="myModal" >About<span>Qui sommes nous ?</span></a></li>
        </ul>
        <div id="myModal" class="reveal-modal" data-reveal>
            <h2>InSan3 Community :</h2>
                 <p>Une communauté ouverte à TOUS
                 innovante en regroupant des artistes de tous genres
                 podcaster, Dessinateurs, Gamers,..etc voila de quoi est formé notre communauté !!
                 InSan3 Community , un univers convivial, poussant a l'entraide , un atout pour tous
                 retrouvez tous ce que vous aimez dans la InSan3 Community
                 partagez, Découvrez, Apprenez grâce a la InSan3 !
                 la InSan3 crée le lien entre les genres
                 InSan3, Là où tous les univers se rejoignent </p>   
              <a class="close-reveal-modal">&#215;</a>
        </div>
    </div>
    </div>
  
      <!-- fin menu -->

      <!-- Debut content -->

    <div class="row panel">
        
        <!-- Debut diaporama -->

        <ul class="example-orbit" data-orbit> 
              <li> 
                <img src="http://fthemes.com/themedemo/wp-content/themes/VideoGamer/images/default-slides/4.jpg" alt="slide 1" />
                 <div class="orbit-caption">Stream live</div> 
             </li> 
             <li class="active"> 
               <img src="http://fthemes.com/themedemo/wp-content/themes/GamePlus/images/default-slides/5.jpg" alt="slide 2" /> 
               <div class="orbit-caption">News jeux</div> 
           </li> 
           <li> 
              <img src="http://fthemes.com/themedemo/wp-content/themes/GamePlus/images/default-slides/2.jpg" alt="slide 3" /> 
              <div class="orbit-caption">and more</div> 
          </li>
    </ul>
      
      <!-- fin diaporama -->

      <!-- Debut description -->
      <div class="row">
          <hr>
        <div id="pag">
          <div class="row" data-equalizer> 
              <div class="large-4 columns " data-equalizer-watch>
                  <div id="round">
                  <i class="fa fa-youtube-play"></i>
                  </div>
                    <h4>Comment Streamer ?</h4>
                    <p>Pour cela créer un compte sur le site</p>
                </div> 
                <div class="large-4 columns " data-equalizer-watch> 
                    <i class="fa fa-rss"></i>
                      <h4>Pourquoi créer une page de stream ?</h4>
                      <p>Créer une page de stream permet de difuser de façon libre sa passion</p>
                </div>
                <div class="large-4 columns " data-equalizer-watch>
                    <i class="fa fa-rocket"></i>
                      <h4>Les services sont payants ?</h4>
                      <p>le service de stream est gratuit et le restera .</p>
                </div>
            </div>
        </div>
      </div>
        <hr>

        <!-- Fin description -->
          
        <!-- Debut citation -->

      <div class="small-4 small-centered columns">
      <blockquote>
         Que dirai vous de stream sans lag ?
        <cite>InSan3 Dpr3y.</cite>
      </blockquote>
      </div>
      
        <!-- Fin citation -->

      </div>

        <!-- fin content -->

        <!-- Debut Stream-zone -->

            <div id="box">
              <div class="flex-video">
              <!--  <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls preload="auto" width="550" height="400" data-setup='{ "techOrder": ["flash"] }' poster="{{ url('images/mainbg.png') }}" >
              <source src="rtmp://154.67.12.77/live/kazagamers" type='rtmp/mp4'>
            </video> -->
            </div>
            </div>
              
                <!-- Debut Sub -->

            <div class="row">
                <div id="about">
                    <div class="small-8 small-centered columns">
                        <ul>
                            <li><kbd>Stream by Dpr3y</kbd></li>
                            <li><a href="#">Partager <i class="fa fa-cloud-upload"></i></a></li>
                            <li><a href="#">Like <i class="fa fa-thumbs-o-up"></i></a></li>
                            <li><a href="#">dislike <i class="fa fa-thumbs-o-down"></i></a></li>
                            <li><a href="#">Comments <i class="fa fa-bars"></i></a></li>
                        </ul>
                      </div>
                </div>
                  <div data-alert class="alert-box radius">
                    Stream Beta 1
                    <a href="#" class="close">&times;</a>
                 </div>
            </div>
        
              <!-- Fin sub -->
        </div>

      <!-- Fin page -->

@stop
@section('footer')
<script>
      $(document).foundation();
</script>
@stop
@endif