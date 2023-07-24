@foreach (['success', 'danger', 'warning', 'info'] as $status)
    @if (session($status))
        <div class="alert alert-{{ $status }} alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            {{ session($status) }}
        </div>
    @endif
@endforeach
