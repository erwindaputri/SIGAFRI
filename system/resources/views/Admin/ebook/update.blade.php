@extends('Layout.Admin.base')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title br-0 mb-3">FORM EDIT DATA E-BOOK</h3>
            </div>

        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card rounded-md shadow-md">
                    <div class="card-body">
                        <form action="{{ url('Admin/ebook/updateAct', $list->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Nama E-book</label>
                                        <input type="text" name="nama_ebook" value="{{ $list->nama_ebook }}"
                                            class="form-control" placeholder="Nama E-book ..."required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Penulis</label>
                                        <input type="text" name="penulis" value="{{ $list->penulis }}"
                                            class="form-control" placeholder="Penulis ..."required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Tahun Terbit</label>
                                        <input type="number" min="2000" name="tahun" value="{{ $list->tahun }}" class="form-control" 
                                        placeholder="Tahun Rilis ..."required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Sampul</label>
                                        <input id="gambar" type="file" name="sampul" class="form-control"
                                            accept=".png, .jpg, .jpeg">
                                        <img id="gambarPreview" src="{{ url("public/$list->sampul") }}"
                                            class="rounded float-end" width="50%" alt="..."required>
                                    </div>
                                </div>
                                <!-- ... -->
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">PDF</label>
                                        <input type="file" id="pdf" name="pdf" class="form-control"
                                            accept="application/pdf">
                                        <span id="pdfName">{{ $list->pdf }}</span>
                                        <iframe id="pdfPreview" src="{{ url("public/$list->pdf") }}" width="100%"
                                            height="300px" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <!-- ... -->

                                <div class="col-lg-12 col-12">
                                    <div class="d-flex align-items-center justify-content-center mt-5">
                                        <a href="{{ url('Admin/ebook') }}" class="btn btn-warning">BATAL</a>
                                        <button class="btn btn-primary mx-2">SIMPAN</button>
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
        // Fungsi ini dieksekusi setelah seluruh dokumen HTML selesai dimuat
        $(document).ready(function() {
            // Event listener untuk input file gambar dengan ID "gambar"
            $("#gambar").on("change", function(e) {
                // Mengambil file gambar yang dipilih oleh user
                var imageFile = e.target.files[0];

                // Membuat objek FileReader
                const reader = new FileReader();

                // Membaca file gambar sebagai URL data (base64)
                reader.readAsDataURL(imageFile);

                // Ketika file gambar berhasil dibaca, fungsi dalam arrow function ini akan dijalankan
                reader.addEventListener("load", () => {
                    // Menetapkan nilai atribut "src" dari elemen dengan ID "gambarPreview" dengan hasil bacaan (base64) dari file gambar yang dipilih
                    // Ini akan menampilkan pratinjau gambar di halaman sebelum gambar diupload
                    $("#gambarPreview").attr("src", reader.result);
                });
            });
        });
    </script>
    <script>
        // Fungsi ini dieksekusi setelah seluruh dokumen HTML selesai dimuat
        $(document).ready(function() {
            // Event listener untuk input file PDF dengan ID "pdf"
            $("#pdf").on("change", function(e) {
                // Mengambil file PDF yang dipilih oleh user
                var pdfFile = e.target.files[0];

                // Mendapatkan nama file PDF yang dipilih dan menyimpannya dalam variabel "pdfName"
                var pdfName = pdfFile.name;

                // Menetapkan teks pada elemen dengan ID "pdfName" dengan nama file PDF yang dipilih
                // Ini akan menampilkan nama file PDF pada halaman
                $("#pdfName").text(pdfName);

                // Membuat URL objek untuk file PDF yang dipilih
                // URL ini digunakan untuk menampilkan pratinjau PDF pada elemen iframe
                var pdfURL = URL.createObjectURL(pdfFile);

                // Menetapkan nilai atribut "src" dari elemen iframe dengan ID "pdfPreview" dengan URL pratinjau PDF yang telah dibuat sebelumnya
                // Ini akan menampilkan pratinjau PDF di halaman sebelum PDF diupload
                $("#pdfPreview").attr("src", pdfURL);
            });
        });
    </script>
@endpush
