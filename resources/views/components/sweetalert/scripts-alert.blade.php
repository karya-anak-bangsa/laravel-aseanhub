@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.confirm-submit').forEach(function(form) {
                form.addEventListener('submit', function(e) {

                    e.preventDefault();

                    Swal.fire({
                        title: @json($title ?? 'Confirmation?'),
                        text: @json($text ?? 'Are you sure you want to save this information?'),
                        icon: @json($icon ?? 'success'),
                        showCancelButton: true,
                        confirmButtonColor: @json($confirmButtonColor ?? '#28a745'),
                        cancelButtonColor: @json($cancelButtonColor ?? '#6c757e'),
                        confirmButtonText: @json($confirmButtonText ?? 'Yes, Save!'),
                        cancelButtonText: @json($cancelButtonText ?? 'Cancel'),
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            HTMLFormElement.prototype.submit.call(form); // ✔ clean
                        }
                    });

                });
            });
        });
    </script>
@endpush
