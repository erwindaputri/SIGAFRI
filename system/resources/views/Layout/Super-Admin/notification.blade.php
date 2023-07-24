 
 @foreach (['success', 'danger', 'warning', 'info'] as $status)
    @if (session($status))
        <div class="alert alert-{{ $status }} alert-dismissible fade show" role="alert">
            {{ session($status) }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        {{-- <form action="{{$url}}" method="post" class="btn-group" onclick="return confirm('Yakin Anda Menghapus Data Ini?')">
            @csrf
            @method("delete")
            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </form> --}}
    @endif
 @endforeach


