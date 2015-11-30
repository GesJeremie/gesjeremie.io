<h1>Une nouvelle mise en relation</h1>

<p><strong>De: </strong> {{ $request->email }}</p>
<p><strong>Message: </strong> <br/> {!! nl2br($request->message) !!}</p>

<br/>

<p><strong>Pour: </strong> {{ $ad->email }} - {{ $ad->getFullName() }}</p>
