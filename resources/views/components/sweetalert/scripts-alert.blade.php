@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @if (session('alert'))
                Swal.fire({
                    icon: "{{ session('alert.icon') }}",
                    title: "{{ session('alert.title') }}",
                    text: "{{ session('alert.text') }}",
                    confirmButtonColor: '#6c757e',
                    confirmButtonText: 'Try Again',
                });
            @endif
        });
    </script>
@endpush
