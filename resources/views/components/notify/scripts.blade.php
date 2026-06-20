@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/simple-notify/dist/simple-notify.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const el = document.getElementById('notify-data');
            if (!el) return;

            new Notify({
                status: el.dataset.status || 'success',
                text: el.dataset.text || 'Operation completed',
                effect: 'slide',
                speed: 500,
                showIcon: true,
                showCloseButton: true,
                autoclose: true,
                autotimeout: 5000,
                gap: 20,
                distance: 20,
                position: 'right top'
            });

        });
    </script>
@endpush
