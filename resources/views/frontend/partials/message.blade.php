@if (session('flash_success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('flash_success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('flash_error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('flash_error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
