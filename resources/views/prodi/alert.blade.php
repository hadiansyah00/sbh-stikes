@if (session('status'))
<div class="alert alert-success" role="alert">
    <b>Pesan</b> : {{ session('status') }}
</div>


@endif

@if (session('status_delete'))
<div class="alert alert-danger" role="alert">
    <b>Pesan</b> : {{ session('status_delete') }}
  </div>
@endif

