@extends('LandingPage.landing')

@section('content')

<script src="{{ url('public') }}/admin/assets/plugins/jquery/jquery-3.4.1.min.js"></script>
<link href="{{ url('public') }}/admin/leafleat/leaflet.css" rel="stylesheet">
<script src="{{ url('public') }}/admin/leafleat/leaflet.js"></script>
<script src="{{ url('public') }}/admin/leafleat/us-states.js"></script>


<section class="page-title" style="background-image:url(images/background/4.jpg)">
    <div class="auto-container">
        <div class="title-box"><h1>Reptil</h1></div>
        <ul class="page-breadcrumb">
            <li><a href="">Home</a></li>
            <li>Reptil</li>
            <li><a href="">detail</a></li>
            
        </ul>
    </div>
</section>
    <section class="project-single">
        <div class="auto-container">
            <div class="sticky-container">
                <div class="row clearfix">
                    <div class="content-column col-lg-9 col-md-12 col-sm-12 mx-auto text-center">
                        <div class="inner-column">
                            <div class="box-container">
                                <div class="image-box">
                                    <div class="single-item-carousel owl-carousel owl-theme">
                                        @forelse ($list->galeri as $g)
                                            <div class="image">
                                                <a href="{{ url('public/' . $g->gambar_spesies) }}" class="lightbox-image"
                                                    data-fancybox="images">
                                                    <img src="{{ url('public/' . $g->gambar_spesies) }}" alt="">
                                                </a>
                                            </div>
                                        @empty
                                            <div class="image">
                                                <img src="{{ url('public/placeholder.jpg') }}" alt="Placeholder Image">
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-column col-lg-9 col-md-12 col-sm-12 mx-auto text-center">
                        <div class="inner-column">
                            <div class="box-container">

                                <div class="lower-content">

                                    <div id="map" style="width: 100%; height: 200px"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="content-column col-lg-9 col-md-12 col-sm-12 mx-auto text">
                        <div class="inner-column">
                            <div class="box-container">

                                <div class="lower-content">
                                    <h3 class="text-left">{{ $list->nama_spesies }} <i>({{ $list->nama_latin }})</i></h3>
                                    <p class="text-left mb-2">{{ $list->nama_latin }}</p>
                                    <p class="text-left mb-2">Famili: {{ $list->famili }}</p>
                                    <p class="text-left mb-2">Kategori: {{ $list->kategori_spesies }}</p>
                                    <p class="text-left mb-2">Jenis: {{ $list->kategori_jenis }}</p>
                                    <p class="text-left mb-2">Daerah persebaran: {{ $list->nama_daerah }}</p>
                                    <h3 class="text-left">Deskripsi</h3>
                                    <p class="text-left mb-2">{!! $list->deskripsi !!}</p>
                                    <div class="two-column">
                                        <div class="row clearfix">
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <!-- Isi konten kolom pertama di sini -->
                                            </div>
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <!-- Isi konten kolom kedua di sini -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .box-container {
            padding: 20px;
            background-color: #f5f5f5;
        }
    </style>


<script>
    var lat = {{ $list->lat }};
    var lng = {{ $list->lng }};
       var map = L.map('map').setView([lat, lng], 12);
       var amfibis = L.icon({
            iconUrl: `{{ url('public') }}/amfibi.png`,
            iconSize: [24, 24], // size of the icon
        });
       L.marker([lat, lng], {
        icon: amfibis
       }).addTo(map)
    .openPopup();
    
    // Menambahkan layer peta
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    }).addTo(map);

</script>
@endsection
