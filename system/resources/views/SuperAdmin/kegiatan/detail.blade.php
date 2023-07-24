@extends('Layout.Super-Admin.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="pb-5 flex align-items-center justify-content-between">
                <h2 class="content-title">DETAIL DATA KEGIATAN</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-images">
                <div class="card-body card-images">
                    <img src="{{ url('public') }}/{{ $list->gambar_kegiatan }}" width="50%" alt="" class="img-spesies">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-body">
                    <ul class="list-unstyled profile-about-list">
                        <li>
                           
                            <span>Nama kegiatan : {{ $list->nama_kegiatan }}</span>
                            
                        </li>
                        <li>
                           
                            <span>Kategori : {{ $list->kategori_kegiatan }}</span>
                            
                        </li>
                        <li>
                           
                            <span>Deskripsi : {!! $list->deskripsi !!}</span>
                            <h4></h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
