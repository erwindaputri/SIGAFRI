@extends('Layout.Super-Admin.base')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title br-0 mb-3"> TAMBAH DATA SUPER ADMIN</h3>
            </div>

        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card rounded-md shadow-md">
                    <div class="card-body">
                        <form action="{{ url('SuperAdmin/superadmin') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                               
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama ..."required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder=" Email ..."required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Username </label>
                                        <input type="text" name="username" class="form-control" placeholder="Usernam  ..."required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password ..."required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Poto</label>
                                        <input type="file" name="poto" class="form-control" accept=".png, .jpg, .jpeg"required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="d-flex float-right">
                                        <a href="{{ url('SuperAdmin/admin') }}" class="btn btn-warning">BATAL</a>
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
