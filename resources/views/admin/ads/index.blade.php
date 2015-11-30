@extends('layouts.admin')

<!-- Navbar -->
@section('navbar')
  @parent
@stop

@section('content')
  

  <div class="grid-10 centered +center +spacer">
    @include('partials.success')
  </div>

  <div class="grid-10 centered +spacer">
    
    <!-- Filters -->
    <div class="+center">
      <a class="button --large --primary {{ active_css($status, '') }}" href="{{ action('Admin\Ads@getIndex') }}">Toutes</a>
      <a class="button --large --primary {{ active_css($status, 'processing') }}" href="{{ action('Admin\Ads@getIndex', ['status' => 'processing']) }}">A Valider</a>
      <a class="button --large --primary {{ active_css($status, 'validated') }}" href="{{ action('Admin\Ads@getIndex', ['status' => 'validated']) }}">Validées</a>
      <a class="button --large --primary {{ active_css($status, 'refused') }}" href="{{ action('Admin\Ads@getIndex', ['status' => 'refused']) }}">Refusées</a>
      <a class="button --large --primary {{ active_css($status, 'standby') }}" href="{{ action('Admin\Ads@getIndex', ['status' => 'standby']) }}">Désactivées</a>

      <div class="+spacer"></div>
    </div>
  </div>

  <div class="grid-9 centered">

    <div class="panel">

      <div class="panel__container">
        <div class="grid-2">
          <strong>Image</strong>
        </div>
        <div class="grid-2">
          <strong>Nom</strong>
        </div>
        <div class="grid-1">
          <strong>Age</strong>
        </div>
        <div class="grid-3">
          <strong>Statut</strong>
        </div>
        <div class="grid-4">
          <strong>Actions</strong>
        </div>
        <div class="clear +spacer"></div>
        <div class="panel__divider"></div>
      </div>

      @foreach ($ads as $ad)
        <div class="panel__container">
              <div class="grid-2">
                <div class="picture --circle" style="background-image: url('{{ $ad->getThumbnail('small') }}')"></div>
              </div>
              <div class="grid-2">
                <div class="+spacer-small">{{ $ad->getFullName() }}</div>
              </div>
              <div class="grid-1">
                <div class="+spacer-small">{{  $ad->getAge() }}</div>
              </div>
              <div class="grid-3">
                <div class="+spacer-small">{{  $ad->getStatus() }}</div>
              </div>
              <div class="grid-4">
                <div class="spacer-small">
                  <a href="{{ action('Admin\Ads@getShow', ['ad' => $ad->id]) }}" class="button">Voir l'annonce</a>
                  <a href="#" class="button --danger" data-jq-dropdown="#dropdown-status-{{ $ad->id }}">Changer le statut</a>
                </div>


                {{-- Dropdown status --}}
                <div id="dropdown-status-{{ $ad->id }}" class="jq-dropdown jq-dropdown-tip">
                  <ul class="jq-dropdown-menu">
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
          <div class="clear"></div>
          <div class="+spacer"></div>
          <div class="panel__divider"></div>  
        </div>
         
      @endforeach
    </div>
  </div>
  <div class="grid-10 centered">
    
    <div class="+center">
      {!! $ads->render() !!}
    </div>
    <div class="+spacer"></div>

  </div>


@stop
