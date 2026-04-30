@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.confirm-submit').forEach(function(form) {
                form.addEventListener('submit', function(e) {

                    e.preventDefault();

                    Swal.fire({
                        title: "Confirmation?",
                        text: "Are you sure you want to update this information?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#e1a801',
                        cancelButtonColor: '#6c757e',
                        confirmButtonText: 'Yes, Edit!',
                        cancelButtonText: 'Cancel',
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
