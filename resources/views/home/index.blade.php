@extends('layouts.master')
@section('content')
  
  <div class="grid-10 centered +spacer">
    @include('partials.success')
  </div>
  
  <div class="container +spacer">
    <div class="grid-10 centered">
        <div class="intro">
          <img src="{{ url('images/logo-babysitting.png') }}" />
          <h1>Trouvez votre baby sitter sur Bordeaux</h1>
          <p class="+center">
            Baby Sitting Bordeaux vous permet de trouver votre <strong>prochaine baby sitter</strong> sur <strong>Bordeaux</strong>. C'est <strong>simple</strong>, <strong>gratuit</strong> et <strong>efficace</strong> 😀. Il vous suffit de trouver la personne qui correspond à vos besoins juste en dessous 😍.
          </p>

          <div class="intro__facebook">
            <div class="hide-xs">
              <div class="fb-like" data-href="https://www.facebook.com/babySittingBordeaux/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
            </div>

            <div class="hide show-xs">
              <div class="fb-like" data-href="https://www.facebook.com/babySittingBordeaux/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
            </div>
          </div>
        </div>
    </div>

  </div>

  @if ($ads->count() > 0)
    <div class="container +spacer">
      <ul class="list">
       @foreach ($ads as $ad)
         <li>
           <div class="row">
             <div class="grid-3 +center grid-xs-12">
              <div class="picture --circle" style="background-image: url('{{ $ad->getThumbnail('medium') }}') "></div>
               <p class="+center">{{ $ad->getDiffHumans() }}</p>
               @if ($ad->hasEarlyBadge())
                <img class="picture --medal js-tooltip" title="Badge: Membre du site depuis le début" src="{{ url('images/medal.png') }}" />
               @endif
             </div>
             <div class="grid-8 grid-xs-12">
               <h2 class="list__name">{{ $ad->getFullName() }}</h1>
               <h3 class="list__old">{{ $ad->getAge() }}</h3>
               <p>{!! $ad->getShortContent() !!}</p>
               <a href="{{ action('Ads@getShow', ['adSlug' => $ad->slug]) }}" class="button">Voir L'annonce</a>

             </div>
           </div>
           <div class="clear"></div>
         </li>
       @endforeach
      </ul>

      <div class="+center">
        {!! $ads->render() !!}
      </div>

    </div>
  @else
    <div class="grid-10 grid-xs-12 centered +spacer">
      <div class="alert --empty-home">Aucune annonce pour le moment ...</div>
    </div>
  @endif
  
  <div class="grid-10 grid-xs-12 centered">
    <h1 class="title --add">Envie d'apparaitre dans ces résultats ?</h1>
    <div class="+center">
      <a class="button" href="{{ action('Ads@getIndex') }}">Ajouter mon annonce gratuitement</a>
    </div>
  </div>

  <div class="+spacer"></div>

@stop
