@extends('layouts.master')

@section('title')
  <title>Contact | Baby Sitting Bordeaux</title>
@stop

@section('seo')
  <meta name="description" content="Une question sur baby sitting bordeaux ? N'hésitez pas à nous contacter." />
  <meta name="keywords" content="baby sitting, baby-sitting, nounous bordeaux, baby sitting bordeaux, baby sitter bordeaux, annonces baby sitting bordeaux, annonces nounous bordeaux" />

  <!-- Facebook -->
  <meta property="og:title" content="Contact | Baby Sitting Bordeaux"/>
  <meta property="og:description" content="Une question sur baby sitting bordeaux ? N'hésitez pas à nous contacter." />
  <meta property="og:url" content="{{ url() }}" />
  <meta property="og:site_name" content="Baby Sitting Bordeaux"/>
  <meta property="og:image" content="{{ url('images/facebook_meta/home.png') }}"/>
@stop

@section('content')    

    <!-- Feedbacks -->
    <div class="container-fluid +spacer">
      @include('partials.errors', ['errors' => $errors])
      @include('partials.success')
    </div>

    <div class="container-fluid +spacer">
        
        <div class="grid-10 grid-xs-12 centered">
            <h1 class="title --heading +center">Nous Contacter</h1>
            <p class="+center">
                Un problème sur le site, une question précise, envie de discuter avec l'équipe ? <br/>N'hésite pas à nous contacter !
            </p>
        </div>

        <div class="grid-8 grid-xs-12 centered">
            {!! Form::open(['action' => 'Pages@postContact']) !!}

                <div class="form__entry">
                    {!! Form::label('email', 'Votre email') !!}
                    {!! Form::text('email') !!}
                </div>
                
                <div class="form__entry +spacer">
                    {!! Form::label('message', 'Votre message') !!}
                    {!! Form::textarea('message') !!}
                </div>

                {!! Form::submit('Nous Contacter', ['class' => 'button --block +capitalize']) !!}

            {!! Form::close() !!}
        </div>

        <div class="+spacer"></div>
    </div>
@stop