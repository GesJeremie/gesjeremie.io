<!DOCTYPE html>
<html>
<head>
  <!-- Title -->
  <title>Admin - Baby Sitting Bordeaux</title>

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
  {!! Html::style('stylesheets/admin.css') !!}
  {!! Html::script('javascripts/vendor.js') !!}
  {!! Html::script('javascripts/app.js') !!}

  <!-- Boot -->
  <script>require('initialize');</script>



</head>
<body id="csstyle" class="page-admin">
  
  @section('page')

    <div id="wrapper">

      @section('navbar')
        <div id="sidebar-wrapper">
          <div class="sidebar">

            <a class="sidebar__header" href="{{ action('Admin\Auth@getLogout') }}">
              <i class="fa fa-power-off"></i>
            </a>

            <a class="sidebar__item" href="{{ action('Admin\Ads@getIndex') }}">
              <i class="fa fa-file-text"></i>
              <span>Annonces</span>
            </a>
           
            <a class="sidebar__item" href="{{ action('Admin\AdMessages@getIndex') }}">
              <i class="fa fa-link"></i>
              <span>Messages</span>
            </a>

            <a class="sidebar__item" href="{{ action('Admin\Logs@getIndex') }}">
              <i class="fa fa-tasks"></i>
              <span>Logs</span>
            </a>
            
          </div>
        </div>
      @show

      <div id="page-wrapper">
        @yield('content')
      </div>
    </div>

  @show


</body>
</html>
