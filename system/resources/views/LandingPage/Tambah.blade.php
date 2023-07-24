@extends('LandingPage.landing')

@section('content')
    <section class="page-title" style="background-image:url(images/background/4.jpg)">
        <div class="auto-container">
            <div class="title-box">
                <h1>Tambah</h1>
            </div>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Tambah Spesies</li>
                <li>Tambah</li>
            </ul>
        </div>
    </section>
    <style>
        .maps {
            width: 100%;
            height: 300px;
        }
    
        /* Ganti warna dan ukuran container sesuai kebutuhan */
        .container-maps {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 20px;
            margin-top: 20px;
        }
    
        @media (max-width: 768px) {
            .container-maps {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        }
    </style>

    <!-- Content Header (Page header) -->


    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card rounded-md shadow-md">
                    <div class="card-body">
                        
                            <section class="contact-form-section">
                                <div class="auto-container">
                                    <div class="sec-title text-center">
                                        <h2>FROM <span> TAMBAH</span></h2>
                                    </div>
                                    <div class="contact-form">
                                        <form action="{{ url('spesies-anggota') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row clearfix">
                                                <input type="text" name="id_anggota" class="form-control"
                                                    value="{{ Auth::guard('anggota')->user()->nomor }}" hidden>
                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label for="">Nama Spesies</label>
                                                    <input type="text" name="nama_spesies" value=""
                                                        placeholder="Name Spesies..." required>
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label for="">Nama Latin</label>
                                                    <input type="text" name="nama_latin" value=""
                                                        placeholder="Nama Latin... " required>
                                                </div>

                                                <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                                    <label for="">Famili</label>
                                                    <input type="text" name="famili" value=""
                                                        placeholder="Famili..." required>
                                                </div>

                                                <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                                    <label for="">Kategori</label>
                                                    <select name="kategori_spesies" id="" class="select-box"
                                                        required>
                                                        <option value="">- Pilih -</option>
                                                        <option value="Amfibi">Amfibi</option>
                                                        <option value="Reptil">Reptil</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-lg-4 col-md-12 col-sm-12">

                                                    <label for="">Kategori Jenis</label>
                                                    <select name="kategori_jenis" id="" class="select-box"
                                                        required>
                                                        <option value="">- Pilih -</option>
                                                        <option value="Berbisa">Berbisa</option>
                                                        <option value="Tidak Berbisa">Tidak Berbisa</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                                    <label for="">Gambar</label>
                                                    <input type="hidden" name="lat" id="lat" />
                                                    <input type="hidden" name="lng" id="lng" />
                                                    <input id="gambar" type="file" name="gambar_spesies[]"
                                                        class="form-control" placeholder="Gambar ..." multiple required>
                                                    <div class="col-12">
                                                        <label for="">Pratinjau Gambar</label>
                                                        <div id="wrapperPreview"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                                    <label for="">Daerah pesebaran</label>
                                                    <input type="text" name="nama_daerah" id="nama_daerah" id="daerah" class="form-control"
                                                        placeholder="Daerah pesebaran spesies ..." required>
                                                </div>
                                                <div class="col-lg-8 col-12 " >
                                                    <div class="container mt-5">
                                                        <label class="font-size-15">PILIH LOKASI PESEBARAN SPESIES</label>
                                                        <div id="maps" class="maps"></div>
                                                    </div>
                                            </div>

                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <label for="">Deskripsi</label>
                                                    <textarea name="deskripsi" placeholder="Deskripsi..."></textarea>
                                                </div>

                                                <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                                                    <a href="{{ url('/TambahSpesies') }}"
                                                        class="theme-btn  btn btn-info">BATAL</a>
                                                    <button type="submit" class="theme-btn btn-style-one">SIMPAN</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </section>
                            
                        </form>
                    </div>
                </div>
        </div>
    </section>
@endsection

@push('script')
    <!-- Include Leaflet CSS and JS files -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script>
        let myLatlng = L.latLng(0.0315034, 109.6132273);
        let map = L.map('maps').setView(myLatlng, 5.5);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        map.on("click", function(e) {
            var lat = e.latlng.lat.toFixed(7);
            var lng = e.latlng.lng.toFixed(7);
            $('#lat').val(lat);
            $('#lng').val(lng);

            $.get('https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=' + lat + '&lon=' + lng, function(
                data) {
                $('#daerah').val(data.display_name);
                $('#nama_daerah').val(data.display_name);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#gambar").on("change", function(e) {
                var imageFile = e.target.files;
                for ($i = 0; $i < imageFile.length; $i++) {
                    if (imageFile) {
                        const reader = new FileReader();
                        reader.readAsDataURL(imageFile[$i]);
                        reader.addEventListener("load", () => {
                            $("#wrapperPreview").append('<img src="' + reader.result +
                                '" width="100" style="margin: 0 10 10 0;">');
                        });
                    }
                }
            });
        });
    </script>
@endpush
