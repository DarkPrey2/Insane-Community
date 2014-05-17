<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ url('css/style.css') }}" />
    <link rel="icon" type="image/png" href="logo.png" />
    <link rel="stylesheet" href="{{ url('css/normalize.css') }}" media="screen">
    <script type="text/javascript" src="{{ url('js/vendor/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/foundation.min.js') }}"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="http://vjs.zencdn.net/4.5/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.5/video.js"></script>
<style type="text/css">
  .vjs-default-skin .vjs-control-bar { font-size: 60% }
</style>
<title>Insane Streaming</title>
</head>
<body>
    <div id="row">
    <div class="large-12 columns">
    @if(Session::has('message'))
     <div class="alert-box warning radius">{{ Session::get('message') }}</div>
    @endif
        @yield('content')
    </div>
    </div>
    @yield('footer')
</body>
</html>