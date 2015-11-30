<h1>Annonce Refusée</h1>

<p>Nous sommes sincèrement désolé, mais ton annonce à été refusée sur babysittingbordeaux.fr ...</p>

<p>
  <a href="{{ action('Ads@getEdit', ['token' => $ad->token]) }}">Editer mon annonce</a>
</p>

@include('mails.no_reply')
