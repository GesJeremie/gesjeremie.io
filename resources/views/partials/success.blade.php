@if (Session::has('success'))
  <div class="alert --success">
    <p>{{ Session::get('success') }}</p>
  </div>
@endif
