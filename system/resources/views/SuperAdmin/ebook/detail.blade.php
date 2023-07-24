@extends('Layout.Super-Admin.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="pb-5 flex align-items-center justify-content-between">
                <h2 class="content-title">DETAIL DATA SPESIES </h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-body">
                    <ul class="list-unstyled profile-about-list">
                        <li>
                            <i class="material-icons">school</i>
                            <span>Nama E-book</span>
                            <p class="mx-4">{{ $list->nama_ebook }}</p>
                        </li>
                        <li>
                            <i class="material-icons">school</i>
                            <span>PDF</span>
                            <p class="mx-4">{{ $list->pdf }}</p>
                            <div class="card" style="width: 40rem;">
                                <a src="{{ url('public') . '/app/pdf/' }}">

                            </div>
                            {{-- <embed src="{{url("app/pdf" }}" type="application/pdf" width="100%" height="600px" /> --}}
                        </li>
                        <li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
