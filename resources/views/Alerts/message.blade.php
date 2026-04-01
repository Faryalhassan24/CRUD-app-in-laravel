@if (session('Insert_Message'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong>  {{session('Insert_Message')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif