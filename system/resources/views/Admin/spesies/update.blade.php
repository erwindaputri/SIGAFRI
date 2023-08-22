@extends('Layout.Admin.base')
@section('content')
    <style>
        .maps {
            width: 100%;
            height: 400px;
        }
    </style>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title br-0 mb-3">FORM EDIT DATA SPESIES</h3>
            </div>

        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card rounded-md shadow-md">
                    <div class="card-body">
                        <form action="{{ url('Admin/spesies/updateAct', $list->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Nama Spesies</label>
                                        <input type="text" name="nama_spesies" value="{{ $list->nama_spesies }}" class="form-control" placeholder="Nama spesies ..." required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Nama Latin</label>
                                        <input type="text" name="nama_latin" value="{{ $list->nama_latin }}" class="form-control" placeholder="Nama latin ..." required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Famili</label>
                                        <input type="text" name="famili" value="{{ $list->famili }}" class="form-control" placeholder="Famili spesies ..." required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <select name="kategori_spesies" id="" class="form-control" required>
                                            <option value="">--- Pilih ---</option>
                                            <option value="Amfibi" @if ($list->kategori_spesies == 'Amfibi') selected @endif>Amfibi</option>
                                            <option value="Reptil" @if ($list->kategori_spesies == 'Reptil') selected @endif>Reptil</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <div class="form-group">
                                        <label for="">Kategori Jenis</label>
                                        <select name="kategori_jenis" id="" class="form-control" required>
                                            <option value="">--- Pilih ---</option>
                                            <option value="Berbisa" @if ($list->kategori_jenis == 'Berbisa') selected @endif>Berbisa</option>
                                            <option value="Tidak Berbisa" @if ($list->kategori_jenis == 'Tidak Berbisa') selected @endif>Tidak Berbisa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="">Daerah pesebaran</label>
                                        <input type="hidden" name="lat" id="lat" value="{{ $list->lat }}">
                                        <input type="hidden" name="lng" id="lng" value="{{ $list->lng }}">
                                        <input type="hidden" name="nama_daerah" id="nama_daerah" value="{{ $list->nama_daerah }}">
                                        <input type="text"data-toggle="modal" id="daerah" value="{{ $list->nama_daerah }}" data-target="#exampleModal" class="form-control" placeholder="Daerah pesebaran spesies ..." required>
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title font-size-24" id="exampleModalLabel">LOKASI PESEBARAN SPESIES</h1>
                    </div>
                    <div class="modal-body">
                        <div id="maps" class="maps"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- jQuery 3 -->

    <script src="{{ url('public') }}/admin/assets/plugins/jquery/jquery-3.4.1.min.js"></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&callback=initMap&libraries=&v=weekly"></script>
    <script>
        let myLatlng = {
            lat: {{ $list->lat }},
            lng: {{ $list->lng }}
        };
        let map = new google.maps.Map(document.getElementById("maps"), {
            zoom: 5.5,
            center: myLatlng,
        });


        const marker = new google.maps.Marker({
            position: myLatlng,
            map,
            title: "Click to zoom",
            draggable: true
        });

        google.maps.event.addListener(marker, 'dragend', function(marker) {
            var latLng = marker.latLng;

            var newLat =  latLng.lat().toFixed(7);
            var newLng =  latLng.lng().toFixed(7);
   
            $('#lat').val(newLat);
            $('#lng').val(newLng);

            $.get('https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=' + newLat + '&lon=' + newLng, function(data) {
                $('#daerah').val(data.display_name)
                $('#nama_daerah').val(data.display_name)
            });
        });

        
    </script>
@endsection
