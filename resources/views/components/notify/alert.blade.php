@if (session('notify'))
    <div id="notify-data"
        data-status="{{ session('notify.type') }}"
        data-text="{{ session('notify.message') }}">
    </div>
@endif
