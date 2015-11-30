<h1>Une annonce à été éditée et est en attente de re-validation</h1>

<p>{{ $ad->getFullName() }} à édité son annonce et attends sa validation pour qu'elle soit publiée sur babysittingbordeaux.fr</p>

<p><a href="{{ action('Admin\Ads@getIndex', ['status' => 'processing']) }}">Gérer les annonces en attente de validation</a></p>
