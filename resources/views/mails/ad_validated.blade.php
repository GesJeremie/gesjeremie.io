<h1>Annonce Validée</h1>

<p>Ton annonce à bien été ajoutée sur babysittingbordeaux.fr !</p>

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
