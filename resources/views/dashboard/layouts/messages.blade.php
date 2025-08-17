{{-- Success Message --}}

@if (session('success') != null)
    <div class="col-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>عملية ناجحة!</strong> {{ session('success') }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
    </div>
@endif


{{-- Error Message --}}
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
