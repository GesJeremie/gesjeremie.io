@extends('layouts.admin')

@section('content')
  <div class="+spacer"></div>

  <div class="container">

    <div class="grid-8 centered">
      <div class="panel">
        <div class="+center">
          <div class="panel__container">
            <div class="picture --circle-big" style="background-image: url('{{ $ad->getThumbnail('medium') }}')"></div>
            <br/>
            <h2>{{ $ad->getFullName() }}</strong></h2>
            <h3>{{ $ad->getAge() }}</h3>

            <div class="+spacer"></div>

            <p class="+justify">
              {!! $ad->getContent() !!}
            </p>

            <div class="+spacer"></div>
            <h4>{{  $ad->getStatus() }}</h4>
            <div class="+spacer"></div>

            <a href="#" class="button --danger --large" data-jq-dropdown="#dropdown-status-{{ $ad->id }}">Changer le statut</a>
            
            {{-- Dropdown status --}}
            <div id="dropdown-status-{{ $ad->id }}" class="jq-dropdown jq-dropdown-tip">
              <ul class="jq-dropdown-menu +left">
                @if ($ad->status !== 'validated')
                  <li>
                    <a href="{{ action('Admin\Ads@getStatus', ['ad' => $ad->id, 'status' => 'validated']) }}">Valider l'annonce</a>
                  </li>
                @endif

                @if ($ad->status !== 'refused')
                  <li>
                    <a href="{{ action('Admin\Ads@getStatus', ['ad' => $ad->id, 'status' => 'refused']) }}">Refuser l'annonce</a>
                  </li>
                @endif

                @if ($ad->status !== 'standby')
                  <li>
                    <a href="{{ action('Admin\Ads@getStatus', ['ad' => $ad->id, 'status' => 'standby']) }}">Mettre en hors ligne</a>
                  </li>
                @endif
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>


  </div>

@stop

