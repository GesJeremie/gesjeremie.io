@extends('layouts.master')
@section('content')


  <!-- Feedbacks -->
  <div class="container-fluid +spacer">
    @include('partials.errors', ['errors' => $errors])
    @include('partials.success')
  </div>

  <div class="container-fluid">

    {!! Form::open(['files' => true, 'action' => 'Ads@postEdit']) !!}

      {!! Form::hidden('token', $token) !!}

      <div class="form__entry +spacer">
        {!! Form::label('avatar-fake', 'Image de profil') !!}

        {!! Form::file('avatar', ['class' => 'js-input-file', 'id' => 'avatar']) !!}
        <label for="avatar">
          <div class="picture --circle" style="background-image: url('{{ $ad->getThumbnail('medium') }}')"></div>
          <span>Changer mon image de profil</span>
        </label>

      </div>

      <div class="parent +spacer">
        <div class="grid-4 grid-xs-12">
          <div class="form__entry">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', $ad->email) !!}
          </div>
        </div>
        <div class="clear +spacer hide show-xs"></div>
        <div class="grid-4 grid-xs-12">
          <div class="form__entry">
            {!! Form::label('firstname', 'Prénom') !!}
            {!! Form::text('firstname', $ad->firstname) !!}
          </div>
        </div>
        <div class="clear +spacer hide show-xs"></div>
        <div class="grid-4 grid-xs-12">
          <div class="form__entry">
            {!! Form::label('lastname', 'Nom de famille') !!}
            {!! Form::text('lastname', $ad->lastname) !!}
          </div>
        </div>
      </div>

      <div class="parent +spacer">
        <div class="form__entry">
          {!! Form::label('birthday', 'Date de naissance') !!}

          <div class="row">
            <div class="grid-4 grid-xs-12">
              {!! Form::selectRange('day', 1, 31, $ad->birthday_day) !!}
            </div>
            <div class="clear +spacer hide show-xs"></div>
            <div class="grid-4 grid-xs-12">
              {!! Form::select('month', Config::get('bsb.months'), $ad->birthday_month) !!}
            </div>
            <div class="clear +spacer hide show-xs"></div>
            <div class="grid-4 grid-xs-12">
              {!! Form::selectRange('year', 1950, 2002, $ad->birthday_year) !!}
            </div>
          </div>
        </div>
      </div>

      <div class="+spacer">
        <div class="form__entry">
          {!! Form::label('content', 'Ton annonce') !!}
          {!! Form::textarea('content', $ad->content) !!}
        </div>
      </div>

      <div class="+spacer">
        <div class="form__entry">
          {!! Form::label('phone', 'Numéro de téléphone') !!}
          {!! Form::text('phone', $ad->phone) !!}
        </div>
      </div>


      <div class="grid-8 grid-xs-12 centered +center">
        {!! Form::submit('Editer mon annonce', ['class' => 'button --block +capitalize']) !!}
      </div>


    {!! Form::close() !!}

    <div class="+spacer"></div>

  </div>
@stop
