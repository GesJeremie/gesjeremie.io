<h1>Demande d'ajout d'annonce</h1>

<p>{{ $ad->getFullName() }} veut ajouter son annonce à babysittingbordeaux.fr</p>

<p><a href="{{ action('Admin\Ads@getIndex', ['status' => 'processing']) }}">Gérer les annonces en attente de validation</a></p>
