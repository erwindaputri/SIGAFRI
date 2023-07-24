@extends('Layout.Admin.base')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title br-0 mb-3">FORM UPDATE DATA KEGIATAN</h3>
            </div>

        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card rounded-md shadow-md">
                    <div class="card-body">
                        <form action="{{ url('Admin/kegiatan/updateAct', $list->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Nama Kegiatan</label>
                                        <input type="text" name="nama_kegiatan" value="{{ $list->nama_kegiatan }}" class="form-control" placeholder="Nama Kegiatan ...">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <select name="kategori_kegiatan" id="" class="form-control">
                                            <option value="">--- Pilih ---</option>
                                            <option value="Seminar" @if ($list->kategori_kegiatan == 'Seminar') selected @endif>Seminar</option>
                                            <option value="Trip" @if ($list->kategori_kegiatan == 'Trip') selected @endif>Trip</option>
                                            <option value="Berita" @if ($list->kategori_kegiatan == 'Berita') selected @endif>Berita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input id="gambar" type="file" name="gambar_kegiatan" class="form-control" accept=".png, .jpg, .jpeg">
                                        <img id="gambarPreview" src="{{ url("public/$list->gambar_kegiatan") }}" class="rounded float-end" width="50%" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <textarea class="textarea" name="deskripsi" placeholder="Deskripsi ..." style="width: 100%;padding: 12px;border-radius:4px;border:1.5px solid grey;overflow-x:hidden">{{ $list->deskripsi }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ url('Admin/spesies') }}" class="btn btn-warning">BATAL</a>
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
