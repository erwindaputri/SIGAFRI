@extends('Layout.Super-Admin.base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="pb-5 flex align-items-center justify-content-between">
                <h2 class="content-title">DETAIL DATA SUPER ADMIN</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="card card-images">
                <div class="card-body card-images">
                    <img src="{{ url('public') }}/{{ $list->poto }}" width="40%" alt="" class="img-spesies">
                    <ul class="list-unstyled profile-about-list">
                        <li>
                            <span>Nama : {{ $list->nama }}</span>
                        </li>
                        <li>
                            <span>Username : {{ $list->username }}</span>
                        </li>
                        <li>
                            <span>Email : {{ $list->email }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
       
@endsection
