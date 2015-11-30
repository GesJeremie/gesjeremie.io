@extends('layouts.master')

@section('title')
  <title>Contacter baby sitter bordeaux | Baby Sitting Bordeaux</title>
@stop

@section('seo')
  <meta name="description" content="Contacter {{ $ad->getFullName() }} pour du baby sitting sur bordeaux." />
  <meta name="keywords" content="baby sitting, baby-sitting, nounous bordeaux, baby sitting bordeaux, baby sitter bordeaux, annonces baby sitting bordeaux, annonces nounous bordeaux" />

  {{-- Facebook --}}
  <meta property="og:title" content="Contacter baby sitter bordeaux | Baby Sitting Bordeaux"/>
  <meta property="og:description" content="Contacter {{ $ad->getFullName() }} pour du baby sitting sur bordeaux." />
  <meta property="og:url" content="{{ url() }}" />
  <meta property="og:image" content="{{ url('images/facebook_meta/logo.png') }}"/>
@show


@section('content')
  

  <!-- Feedbacks -->
  <div class="container-fluid +spacer">
    @include('partials.errors', ['errors' => $errors])
    @include('partials.success')
  </div>

  <div class="grid-10 centered +spacer">
    
    <div class="+center">
      <div class="picture --circle-big" style="background-image: url('{{ $ad->getThumbnail('medium') }}')"></div>
      <h1 class="list__name">{{ $ad->getFullName() }}</h1>
      <h3 class="list__old">{{ $ad->getAge() }}</h3>

      @if ($ad->hasEarlyBadge())
        <img class="picture --medal js-tooltip" title="Badge: Membre du site depuis le début" src="{{ url('images/medal.png') }}" />
      @endif
      
      <a href="{{ action('Ads@getShow', ['adSlug' => $ad->slug]) }}" class="button --with-icon"><i class="fa fa-long-arrow-left"></i> Revenir à l'annonce</a>
    
      <div class="+spacer"></div>

    </div>

    {!! Form::open(['action' => ['Ads@postContact', 'adSlug' => $ad->slug]], ['id' => 'contact']) !!}

      <div class="row">
        <div class="grid-6 grid-xs-12">
          <div class="form__entry">
            {!! Form::label('email', 'Votre adresse email') !!}
            {!! Form::text('email') !!}
          </div>
        </div>
        <div class="clear +spacer hide show-xs"></div>
        <div class="grid-6 grid-xs-12">
          <div class="form__entry">
            {!! Form::label('phone', 'Votre numéro de téléphone') !!}
            {!! Form::text('phone') !!}
          </div>
        </div>
      </div>

      <div class="clear"></div>

      <div class="form__entry +spacer">
        {!! Form::label('message', 'Votre message') !!}
        {!! Form::textarea('message') !!}
      </div>

      <div class="form__entry +spacer">
        {!! Form::label('captcha', 'Sécurité: ' . $captcha['question']) !!}
        {!! Form::text('captcha') !!}
      </div>

      {!! Form::hidden('captcha_id', $captcha['id']) !!}


      {!! Form::submit('Envoyer mon message', ['class' => 'button --block']) !!}

      <div class="+spacer"></div>
    {!! Form::close() !!}
  </div>

@stop