@extends('layouts.master')

@section('title')
  <title>Ajouter une annonce | Baby Sitting Bordeaux.</title>
@stop

@section('seo')
  <meta name="description" content="Envie de devenir baby sitter sur bordeaux ? Ajoutez votre annonce !" />
  <meta name="keywords" content="baby sitting, baby-sitting, nounous bordeaux, baby sitting bordeaux, baby sitter bordeaux, annonces baby sitting bordeaux, annonces nounous bordeaux" />

  {{-- Facebook --}}
  <meta property="og:title" content="Ajouter une annonce | Baby Sitting Bordeaux"/>
  <meta property="og:description" content="Envie de devenir baby sitter sur bordeaux ? Ajoutez votre annonce !" />
  <meta property="og:url" content="{{ url() }}" />
  <meta property="og:image" content="{{ url('images/facebook_meta/logo.png') }}"/>
@show


@section('content')

  <!-- Feedbacks -->
  <div class="container-fluid +spacer">
    @include('partials.errors', ['errors' => $errors])
    @include('partials.success')
  </div>


  <div class="container-fluid">

    {!! Form::open(['files' => true]) !!}

      <div class="form__entry +spacer">
        {!! Form::label('avatar-fake', 'Image de profil') !!}

        {!! Form::file('avatar', ['class' => 'js-input-file', 'id' => 'avatar']) !!}
        <label for="avatar"><i class="fa fa-picture-o"></i> <span>Choisir mon image de profil</span></label>
      </div>

      <div class="row +spacer">
        <div class="grid-4 grid-xs-12">
          <div class="form__entry">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email') !!}
          </div>
        </div>
        <div class="clear +spacer hide show-xs"></div>
        <div class="grid-4 grid-xs-12">
          <div class="form__entry">
            {!! Form::label('firstname', 'Prénom') !!}
            {!! Form::text('firstname') !!}
          </div>
        </div>
        <div class="clear +spacer hide show-xs"></div>
        <div class="grid-4 grid-xs-12">
          <div class="form__entry">
            {!! Form::label('lastname', 'Nom de famille') !!}
            {!! Form::text('lastname') !!}
          </div>
        </div>
        <div class="clear"></div>
      </div>

      <div class="+spacer">
        <div class="form__entry">
          {!! Form::label('birthday', 'Date de naissance') !!}

          <div class="row">
            <div class="grid-4 grid-xs-12">
              {!! Form::selectRange('day', 1, 31) !!}
            </div>
            <div class="clear +spacer hide show-xs"></div>
            <div class="grid-4 grid-xs-12">
              {!! Form::select('month', Config::get('bsb.months')) !!}
            </div>
            <div class="clear +spacer hide show-xs"></div>
            <div class="grid-4 grid-xs-12">
              {!! Form::selectRange('year', 1950, 2002) !!}
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>

      <div class="+spacer">
        <div class="form__entry">
          {!! Form::label('content', 'Ton annonce') !!}
          {!! Form::textarea('content') !!}
        </div>
      </div>

      <div class="+spacer">
        <div class="form__entry">
          {!! Form::label('phone', 'Numéro de téléphone') !!}
          {!! Form::text('phone') !!}
        </div>
      </div>


      <div class="grid-8 grid-xs-12 centered +center">
        {!! Form::submit('Poster mon annonce', ['class' => 'button --block +capitalize']) !!}
      </div>


    {!! Form::close() !!}

    <div class="+spacer"></div>

  </div>
@stop
