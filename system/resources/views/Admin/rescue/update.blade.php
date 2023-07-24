@extends('Layout.Admin.base')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title br-0 mb-3">FORM UPDATE DATA RESCUE</h3>
            </div>

        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card rounded-md shadow-md">
                    <div class="card-body">
                        <form action="{{ url('Admin/rescue/updateAct', $list->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Nomor Telepon/WA</label>
                                        <input type="text" name="nomor_telepon" value="{{ $list->nomor_telepon }}" class="form-control" placeholder="Nomor Telepon/WA ...">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" value="{{ $list->email }}"class="form-control" placeholder="Email ...">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" name="alamat" value="{{ $list->alamat }}" class="form-control" placeholder="Alamat ...">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="d-flex align-items-center justify-content-center mt-5">
                                        <a href="{{ url('Admin/rescue') }}" class="btn btn-warning">BATAL</a>
                                        <button class="btn btn-primary mx-2">SIMPAN</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
