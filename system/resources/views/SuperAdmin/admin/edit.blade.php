@extends('Layout.Super-Admin.base')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title br-0 mb-3">FORM EDIT DATA ADMIN</h3>
            </div>

        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card rounded-md shadow-md">
                    <div class="card-body">
                        <form action="{{ url('SuperAdmin/admin', $admin->id) }}/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                               
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Nama admin</label>
                                        <input type="text" name="nama" class="form-control" value="{{ $admin->nama }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $admin->email }}"required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control" value="{{ $admin->username }}"required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>


                                <div class="col-lg-12 col-12">
                                    <label>Poto</label>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <img style="width: 80%" src="{{ url("public/$admin->poto") }}">
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
