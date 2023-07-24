@extends('LandingPage.landing')
@section('content')
    <script src="{{ url('public') }}/admin/assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <link href="{{ url('public') }}/admin/leafleat/leaflet.css" rel="stylesheet">
    <script src="{{ url('public') }}/admin/leafleat/leaflet.js"></script>
    <script src="{{ url('public') }}/admin/leafleat/us-states.js"></script>
    <style>
        .info.legend.leaflet-control,
        .box-info {
            background: #ffffff !important;
            padding: 12px;
            border-radius: 4px;
            position: absolute;
            top: 500%;
            right: 600%;
            min-width: 200px;
        }

        .species-popup {
            text-align: center;
        }

        .species-popup img {
            width: 100px;
            height: 100px;
            margin-top: 5px;
        }

        .species-popup a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #333;
        }
    </style>
    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <div class="slide-item" style="background-image: url({{ url('public') }}/landing/images/ularbiru.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2 style="color: white; text-shadow: 2px 2px 2px black;">Selamat Datang!</h2>
                        <h4 style="color: white; text-shadow: 2px 2px 2px black;">di Yayasan Amfibi Reptil Indonesia.</h4>
                        <div class="link-box clearfix">
                            <a href="{{ url('/amfibi') }}" class="theme-btn btn-style-one">Jelajahi</a>
                            <a  href="{{ url('register') }}" class="theme-btn btn-style-one">Bergabung</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item" style="background-image: url({{ url('public') }}/landing/images/komodo1.jpg);">
                <div class="auto-container clearfix">
                    <div class="content-box pull-right">
                        <h2 style="color: white; text-shadow: 2px 2px 2px black;">Temukan!</h2>
                        <h4 style="color: white; text-shadow: 2px 2px 2px black;">Kekayaan dan Keunikan <br> Amfibi dan
                            Reptil.</h4>
                        <div class="link-box clearfix">
                            <a href="{{ url('/reptil') }}" class="theme-btn btn-style-one">Jelajahi</a>
                            <a  href="{{ url('register') }}" class="theme-btn btn-style-one">Bergabung</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item" style="background-image: url({{ url('public') }}/landing/images/kodok.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2 style="color: white; text-shadow: 2px 2px 2px black;">Bergabunglah!</h2>
                        <h4 style="color: white; text-shadow: 2px 2px 2px black;">Mari jelajahi dan <br> ikuti jejak langkah
                            kita.</h4>
                        <div class="link-box clearfix">
                            <a href="{{ url('/ebook') }}" class="theme-btn btn-style-one">Jelajahi</a>
                            <a  href="{{ url('register') }}" class="theme-btn btn-style-one">Bergabung</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- End Bnner Section -->


    <!--End Services Section -->

    <!-- Why Choose Us -->
    <section class="why-choose-us" style="background-image: url({{ url('public') }}/landing/images/background/1.jpg);">
        <div class="outer-container">
            <div class="title">
                <h2 style="color: white;">Persebaran Spesies Amfibi dan Reptil</h2>
            </div>
            <hr style="border-top: 1px solid white; margin-bottom: 20px;">
            <div id="map" style="width: 100%; height: 400px"></div>
        </div>
    </section>
    
    <script>
        // Membuat peta
        var map = L.map('map').setView([0.0386653, 110.3448371], 4);
    
        // Menambahkan layer peta
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
        }).addTo(map);
    
        // Mendefinisikan data pesebaran amphibian dan reptil
        var reptilDataLayer = [
            @foreach ($reptilData as $data)
                {
                    lat: {{ $data->lat }},
                    lng: {{ $data->lng }},
                    species: `{{ $data->nama_spesies }}`,
                    image: `{{ url('public') }}/{{ $data->galeri->isNotEmpty() ? $data->galeri->first()->gambar_spesies : '' }}`,
                    detailUrl: `{{ url('detailReptil', encrypt($data->id)) }}`
                },
            @endforeach
        ];
    
        var amfibiDataLayer = [
            @foreach ($amfibiData as $data)
                {
                    lat: {{ $data->lat }},
                    lng: {{ $data->lng }},
                    species: `{{ $data->nama_spesies }}`,
                    image: `{{ url('public') }}/{{ $data->galeri->isNotEmpty() ? $data->galeri->first()->gambar_spesies : '' }}`,
                    detailUrl: `{{ url('detailAmfibi', encrypt($data->id)) }}`
                },
            @endforeach
        ];
    
        // Membuat layer grup untuk data pesebaran
        var amphibianLayer = L.layerGroup();
        var reptileLayer = L.layerGroup();
    
        var amfibis = L.icon({
            iconUrl: `{{ url('public') }}/amfibi.png`,
            iconSize: [24, 24], // size of the icon
        });
    
        var reptils = L.icon({
            iconUrl: `{{ url('public') }}/reptil.png`,
            iconSize: [24, 24], // size of the icon
        });
    
        // Menambahkan marker untuk setiap data pesebaran amphibian
        for (var i = 0; i < amfibiDataLayer.length; i++) {
            var marker = L.marker([amfibiDataLayer[i].lat, amfibiDataLayer[i].lng], {
                icon: amfibis
            }).bindPopup('<div class="species-popup"><h5>' + amfibiDataLayer[i].species + '</h5><img src="' + amfibiDataLayer[i].image + '" alt="Spesies"><a href="' + amfibiDataLayer[i].detailUrl + '">Lihat Detail</a></div>').addTo(amphibianLayer);
        }
    
        // Menambahkan marker untuk setiap data pesebaran reptil
        for (var j = 0; j < reptilDataLayer.length; j++) {
            var marker = L.marker([reptilDataLayer[j].lat, reptilDataLayer[j].lng], {
                icon: reptils
            }).bindPopup('<div class="species-popup"><h5>' + reptilDataLayer[j].species + '</h5><img src="' + reptilDataLayer[j].image + '" alt="Spesies"><a href="' + reptilDataLayer[j].detailUrl + '">Lihat Detail</a></div>').addTo(reptileLayer);
        }
    
        // Menambahkan layer grup ke peta
        amphibianLayer.addTo(map);
        reptileLayer.addTo(map);
    
        // Fungsi untuk menyembunyikan atau menampilkan layer grup
        function toggleLayer(layer) {
            if (map.hasLayer(layer)) {
                map.removeLayer(layer);
            } else {
                map.addLayer(layer);
            }
        }
    
        // Menggunakan tombol untuk menyembunyikan atau menampilkan layer pesebaran amphibian
        var amphibianButton = L.control({
            position: 'topright'
        });
        amphibianButton.onAdd = function(map) {
            var button = L.DomUtil.create('button');
            button.innerHTML = 'AMFIBI';
            button.className = 'btn btn-primary btn-sm';
            button.onclick = function() {
                toggleLayer(amphibianLayer);
            };
            return button;
        };
        amphibianButton.addTo(map);
    
        // Menggunakan tombol untuk menyembunyikan atau menampilkan layer pesebaran reptil
        var reptileButton = L.control({
            position: 'topright'
        });
        reptileButton.onAdd = function(map) {
            var button = L.DomUtil.create('button');
            button.innerHTML = 'REPTIL';
            button.className = 'btn btn-warning btn-sm';
            button.onclick = function() {
                toggleLayer(reptileLayer);
            };
            return button;
        };
        reptileButton.addTo(map);
    
        var info = L.control({
            position: 'bottomleft'
        });
    
        info.onAdd = function(map) {
            this._div = L.DomUtil.create('div', 'info');
            this.update();
            return this._div;
        };
    
        info.update = function(props) {
            var contents = props ? '<b>' + props.state + '</b><br />' : 'Arahkan cursor ke area';
            this._div.innerHTML = '<b>DAERAH PERSEBARAN SPESIES AMFIBI DAN REPTIL</b><br />' + contents;
        };
    
        info.addTo(map);
    
        // Mengatur gaya teks menjadi hitam
        document.querySelector('.info').style.color = '#000000';
    
        function getColor(d) {
            return d > 1000 ? '#166534' :
                d > 800 ? '#15803d' :
                d > 500 ? '#16a34a' :
                d > 100 ? '#22c55e' :
                d > 50 ? '#4ade80' :
                d > 20 ? '#86efac' :
                d > 10 ? '#bbf7d0' :
                '#FFEDA0';
        }
    
        function style(feature) {
            return {
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7,
                fillColor: getColor(feature.properties.state)
            };
        }
    
        function highlightFeature(e) {
            const layer = e.target;
            layer.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });
            layer.bringToFront();
            info.update(layer.feature.properties);
        }
    
        /* global statesData */
        const geojson = L.geoJson(statesData, {
            style,
            onEachFeature
        }).addTo(map);
    
        function resetHighlight(e) {
            geojson.resetStyle(e.target);
            info.update();
        }
    
        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }
    
        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }
    
        map.attributionControl.addAttribution('Population data &copy; <a href="http://census.gov/">US Census Bureau</a>');
    
        const legend = L.control({
            position: 'bottomleft'
        });
    
        legend.addTo(map);
    </script>
    
    


    <!-- Contact Section -->
    
    <!--End Map Section -->
@endsection
