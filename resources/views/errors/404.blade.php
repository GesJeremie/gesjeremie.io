<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <!-- Title -->
  <title>Baby Sitting Bordeaux - Erreur 404</title>

  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="{{ url('images/favicon.ico') }}" />

  <!-- Font Awesome cdn -->
  {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}

  @if ( ! $app->environment('production'))

    <script>
      window.brunch = window.brunch || {};
      window.brunch.server = 'localhost';
    </script>

  @endif

  <!-- Gotham -->
  {!! Html::style('stylesheets/vendor.css') !!}
  {!! Html::style('stylesheets/app.css') !!}
  {!! Html::script('javascripts/vendor.js') !!}
  {!! Html::script('javascripts/app.js') !!}

  <!-- Boot -->
  <script>require('initialize');</script>

</head>
<body id="csstyle" class="page-error">

  <div class="container">
    <div class="error">
      <div class="grid-6 grid-xs-12 centered">
        <a href="{{ url() }}"><img src="{{ url('images/logo.png') }}" /></a>
      </div>
      <div class="clear"></div>
      <div class="grid-8 grid-xs-12 centered">
        <p>La page demandée n'existe pas ou n'existe plus ...</p>
      </div>
    </div>
  </div>
</body>
</html>
