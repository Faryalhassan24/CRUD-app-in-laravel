@if (session('Insert_Message'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong>  {{session('Insert_Message')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

@if (session('update_Message'))

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>update!</strong>  {{session('update_Message')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
@if (session('delete_Message'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Deleted!</strong>  {{session('delete_Message')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif