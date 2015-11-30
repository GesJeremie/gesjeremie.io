@extends('layouts.master')

@section('content')
    
    <!-- Feedbacks -->
    <div class="container-fluid +spacer">
      @include('partials.errors', ['errors' => $errors])
      @include('partials.success')
    </div>
    
    <div class="grid-10 centered +spacer">
        {!! Form::open(['action' => 'Ads@postDelete']) !!}

            {!! Form::hidden('token', $ad->token) !!}

            <div class="form__entry">
                {!! Form::label('security', 'Veuillez recopier "Je souhaite supprimer mon annonce"') !!}
                {!! Form::text('security') !!}
            </div>

            {!! Form::submit('Supprimer mon annonce', ['class' => 'button']) !!}
        {!! Form::close() !!}
    </div>

@stop