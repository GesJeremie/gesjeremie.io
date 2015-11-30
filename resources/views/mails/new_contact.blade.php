<h1>Une nouvelle demande de contact</h1>

<p><strong>Adresse Email: </strong> {{ $request->email }}</p>
<p><strong>Téléphone: </strong> {{ $request->phone }}</p>
<p><strong>Message: </strong> <br/> {!! nl2br($request->message) !!}</p>

<br/>

<p>
  <a href="{{ action('Ads@getShow', ['adSlug' => $ad->slug]) }}">Voir mon annonce</a>
  -
  <a href="{{ action('Ads@getEdit', ['token' => $ad->token]) }}">Editer mon annonce</a>
</p>

<br/>

<p>
  Si tu souhaites supprimer ton annonce, <a href="{{ action('Ads@getDelete', ['adToken' => $ad->token]) }}">c'est par ici</a>.
</p>

@include('mails.facebook_like')
@include('mails.no_reply')
