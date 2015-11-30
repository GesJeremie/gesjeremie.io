<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">

  {{-- Title --}}
  @section('title')
    <title>Trouvez gratuitement votre baby sitter sur bordeaux | Baby Sitting Bordeaux</title>
  @show

  {{-- Viewport --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="{{ url('images/favicon.ico') }}" />

  @section('seo')
    <meta name="description" content="Le petit site tout mignon pour trouver gratuitement sa baby sitter sur bordeaux." />
    <meta name="keywords" content="baby sitting, baby-sitting, nounous bordeaux, baby sitting bordeaux, baby sitter bordeaux, annonces baby sitting bordeaux, annonces nounous bordeaux" />

    {{-- Facebook --}}
    <meta property="og:title" content="Baby Sitting Bordeaux"/>
    <meta property="og:description" content="Le petit site tout mignon pour trouver gratuitement sa baby sitter sur bordeaux." />
    <meta property="og:url" content="{{ url() }}" />
    <meta property="og:image" content="{{ url('images/facebook_meta/logo.png') }}"/>
  @show
  
  {{-- Global metas, doesn't need to be in the seo section  --}}
  <meta property="fb:app_id" content="549810791839527" /> 
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Baby Sitting Bordeaux"/>

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


  {{-- Analytics --}}
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-69482716-1', 'auto');
    ga('send', 'pageview');

  </script>

  {{-- Hotjar Tracking Code --}}
  <script>
      (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:110259,hjsv:5};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
      })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
  </script>

</head>
<body id="csstyle">

  {{-- Facebook SDK --}}
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5&appId=549810791839527";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  {{--/ Facebook SDK --}}

  <div id="wrapper">
    <div id="sidebar-wrapper">
      <div class="sidebar">
        <a href="{{ url() }}"><img class="picture --logo" src="{{ url('images/logo.png') }}" /></a>
        <div class="+center">
          <a href="{{ action('Ads@getIndex') }}" class="sidebar__button">Je propose un service</a>
        </div>
      </div>
    </div>
    <div id="page-wrapper">
      @include('partials.menu')

      @yield('content')

    </div>
  </div>


</body>
</html>
