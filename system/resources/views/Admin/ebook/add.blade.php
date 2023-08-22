@extends('Layout.Admin.base')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title br-0 mb-3">FORM TAMBAH DATA E-BOOK</h3>
            </div>

        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card rounded-md shadow-md">
                    <div class="card-body">
                        <form action="{{ url('Admin/ebook/tambahAct') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Nama E-book</label>
                                        <input type="text" name="nama_ebook" class="form-control" placeholder="Nama E-book ..."required>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Penulis</label>
                                        <input type="text" name="penulis" class="form-control" placeholder="Nama Penulis ..."required>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Tahun Terbit</label>
                                        <input type="number" min="2000" name="tahun" class="form-control" placeholder="Tahun Terbit ..."required>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Sampul</label>
                                        <input id="gambar" type="file" name="sampul" class="form-control" accept=".png, .jpg, .jpeg" required>
                                        <img id="gambarPreview" class="rounded float-end" width="50%">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">PDF</label>
                                        <input type="file" name="pdf" class="form-control" accept="application/pdf" required>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="{{ url('Admin/ebook') }}" class="btn btn-warning">BATAL</a>
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
    <!-- jQuery 3 -->

    <script src="{{ url('public') }}/admin/assets/plugins/jquery/jquery-3.4.1.min.js"></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $("#gambar").on("change", function(e) {
                var imageFile = e.target.files[0];

                if (imageFile) {
                    const reader = new FileReader();
                    reader.readAsDataURL(imageFile);

                    reader.addEventListener("load", () => {
                        $("#gambarPreview").attr("src", reader.result);
                    });
                }
            });
        });
    </script>
@endpush
