<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ url('css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('css/normalize.css') }}" media="screen">
    <script type="text/javascript" src="{{ url('js/vendor/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/foundation.min.js') }}"></script>
<title>Ins4n3 G4ming</title>
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