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
  
  {{-- Favicon --}}
  <link rel="shortcut icon" type="image/png" href="{{ url('images/favicon.png') }}"/>

  @section('seo')
    <meta name="description" content="PHP, Laravel, Coffeescript, SASS Enthusiast." />
    <meta name="keywords" content="full stack developer, laravel developer, ges jeremie, jeremie ges, sass developer, coffeescript developer, digital nomad" />

    {{-- Facebook --}}
    <meta property="og:title" content="Ges Jérémie - Full Stack web developeer"/>
    <meta property="og:description" content="PHP, Laravel, Coffeescript, SASS Enthusiast." />
    <meta property="og:url" content="{{ url() }}" />
    <meta property="og:image" content="{{ url('images/avatar.png') }}"/>
  @show
  
  {{-- Global metas, doesn't need to be in the seo section  --}}
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Ges Jérémie"/>

  {{-- Font Awesome cdn --}} 
  {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
  
  {{-- Brunch autoreload under homestead--}}
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
  
  {{-- Analytics --}}
  <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

     ga('create', 'UA-68435352-1', 'auto');
     ga('send', 'pageview');
  </script>

</head>
<body id="csstyle">
  @yield('content')
</body>
</html>
