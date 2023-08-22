@extends('Layout.Super-Admin.base')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title br-0 mb-3">FORM TAMBAH DATA ANGGOTA</h3>
            </div>

        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card rounded-md shadow-md">
                    <div class="card-body">
                        <form action="{{ url('SuperAdmin/anggota', $anggota->nomor) }}/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">nomor</label>
                                        <input type="text" name="nomor" class="form-control" value="{{ $anggota->nomor }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Nama Anggota</label>
                                        <input type="text" name="nama" class="form-control" value="{{ $anggota->nama }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Email Anggota</label>
                                        <input type="email" name="email" class="form-control" value="{{ $anggota->email }}"required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Username Anggota</label>
                                        <input type="text" name="username" class="form-control" value="{{ $anggota->username }}"required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="confir_password" class="form-control" value="{{ $anggota->confir_password }}">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Alamat Anggota</label>
                                        <input type="text" name="alamat" class="form-control" value="{{ $anggota->alamat }}"required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <label>Poto</label>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <img style="width: 20%" src="{{ url("public/$anggota->poto") }}">
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <input type="file" name="poto" class="form-control" accept=".png, .jpg, .jpeg">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="d-flex float-right">
                                        <a href="{{ url('SuperAdmin/anggota') }}" class="btn btn-warning">BATAL</a>
                                        <button class="btn btn-primary mx-2">SIMPAN</button>
                                    </div>

                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
