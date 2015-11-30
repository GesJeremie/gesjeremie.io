@if ($errors->has())
  <div class="alert --danger">
    <p><strong>Ooops</strong> - Des erreurs sont présentes dans le formulaire.</p>
    @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  </div>
@endif
