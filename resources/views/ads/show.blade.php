@extends('layouts.master')

@section('title')
  <title>{{ $ad->getFirstName() }} baby sitter | Baby Sitting Bordeaux.</title>
@stop

@section('seo')
  <meta name="description" content="Voir l'annonce de {{ $ad->getFullName() }}, baby sitter sur Bordeaux." />
  <meta name="keywords" content="baby sitting, baby-sitting, nounous bordeaux, baby sitting bordeaux, baby sitter bordeaux, annonces baby sitting bordeaux, annonces nounous bordeaux" />

  <!-- Facebook -->
  <meta property="og:title" content="{{ $ad->getFirstName() }} baby sitter | Baby Sitting Bordeaux."/>
  <meta property="og:description" content="Voir l'annonce de {{ $ad->getFullName() }}, baby sitter sur Bordeaux." />
  <meta property="og:url" content="{{ url() }}" />
  <meta property="og:site_name" content="Baby Sitting Bordeaux"/>
  <meta property="og:type" content="website" />
  <meta property="og:image" content="{{ $ad->getThumbnail('original') }}"/>
@stop

@section('content')

  <div class="+spacer">
    <div class="grid-10 centered">
      @include('partials.success')
    </div>
  </div>

  <!-- Ad -->
  <div class="container">

    <div class="+center">
      <div class="picture --circle-big" style="background-image: url('{{ $ad->getThumbnail('medium') }}')"></div>
      <h1 class="list__name">{{ $ad->getFullName() }}</h1>
      <h3 class="list__old">{{ $ad->getAge() }}</h3>

      @if ($ad->hasEarlyBadge())
        <img class="picture --medal js-tooltip" title="Badge: Membre du site depuis le début" src="{{ url('images/medal.png') }}" />
      @endif

      <a href="{{ action('Ads@getContact', ['adSlug' => $ad->slug]) }}" class="button --with-icon"><i class="fa fa-envelope-o"></i> Contacter par email</a>
      
      @if ($ad->hasPhone())
        <a href="#" data-jq-dropdown="#panel-phone" class="button --with-icon"><i class="fa fa-phone"></i> Voir le numéro de téléphone</a>
      
        <div id="panel-phone" class="jq-dropdown jq-dropdown-tip">
          <div class="jq-dropdown-panel">
            <img src="{{ action('Ads@getPicturePhone', ['ad' => $ad->id]) }}" />
          </div>
        </div>
      @endif

      <div class="grid-9 grid-xs-12 centered">
        <p class="+justify">{!! $ad->getContent() !!}</p>
      </div>
    </div>
  </div>

  <div class="+spacer-medium"></div>

@stop
