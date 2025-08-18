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
@push('js')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            document.querySelectorAll('.alert').forEach(function(alert) {
                alert.style.transition = "opacity 1s";
                alert.style.opacity = "0";
                setTimeout(() => alert.remove(), 1000); // يشيل العنصر بعد ما يختفي
            });
        }, 5000);
    });
</script>
@endpush

