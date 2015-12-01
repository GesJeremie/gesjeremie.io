<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">

  {{-- Title --}}
  @section('title')
    <title>Ges Jérémie - Full Stack web developeer</title>
  @show

  {{-- Viewport --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="{{ url('images/favicon.ico') }}" />

  @section('seo')
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    {{-- Facebook --}}
    <meta property="og:title" content=""/>
    <meta property="og:description" content="" />
    <meta property="og:url" content="{{ url() }}" />
    <meta property="og:image" content=""/>
  @show
  
  {{-- Global metas, doesn't need to be in the seo section  --}}
  <meta property="fb:app_id" content="" /> 
  <meta property="og:type" content="" />
  <meta property="og:site_name" content=""/>

  {{-- Font Awesome cdn --}} 
  {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}

  @if ( ! $app->environment('production'))

    <script>
      window.brunch = window.brunch || {};
      window.brunch.server = 'localhost';
    </script>

  @endif

  {{-- Gotham --}}
  {!! Html::style('stylesheets/vendor.css') !!}
  {!! Html::style('stylesheets/app.css') !!}
  {!! Html::script('javascripts/vendor.js') !!}
  {!! Html::script('javascripts/app.js') !!}

  {{-- Boot Gotham --}}
  <script>require('initialize');</script>

</head>
<body id="csstyle">
  @yield('content')
</body>
</html>
