@extends('layouts.admin')

@section('page')

  <div class="container">

    <div class="+spacer-large"></div>

    <div class="grid-6 centered">
      @include('partials.success')

      <div class="+spacer"></div>
      
      {!! Form::open() !!}

        <div class="panel">
          <div class="panel__container">
            <div class="form__entry">
              {!! Form::label('password', 'Mot de passe') !!}
              {!! Form::password('password') !!}

            </div>

            @if ($errors->has())
              <div class="alert --danger +spacer-small">{{ $errors->first('password') }}</div>
            @endif
            
            <div class="+spacer-small"></div>
            <div class="panel__divider"></div>
            <div class="+spacer-small"></div>

            {!! Form::submit('Me connecter', ['class' => 'button --block --large --primary']) !!}
          </div>
        </div>

      {!! Form::close() !!}

    </div>
  </div>

@stop
