@extends('Layout.Super-Admin.base')
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

    /* Set the height of the map container */
    #map {
        height: 400px;
    }
</style>
    <div class="page-content">
        
        <div class="main-wrapper">
            <div class="row stats-row">
                <div class="col-lg-4 col-md-12">
                    <div class="card card-transparent stats-card">
                        <div class="card-body">
                            <div class="stats-info">
                                <h5 class="card-title">{{ $spesies }}<span class="stats-change stats-change-success">DATA</span></h5>
                                <p class="stats-text">SPESIES</p>
                            </div>
                            <div class="stats-icon change-success">
                                <i class="material-icons">list</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card card-transparent stats-card">
                        <div class="card-body">
                            <div class="stats-info">
                                <h5 class="card-title">{{ $ebook }}<span class="stats-change stats-change-success">DATA</span></h5>
                                <p class="stats-text">E-BOOK</p>
                            </div>
                            <div class="stats-icon change-success">
                                <i class="material-icons">description</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card card-transparent stats-card">
                        <div class="card-body">
                            <div class="stats-info">
                                <h5 class="card-title">{{ $kegiatan }}<span class="stats-change stats-change-success">DATA</span></h5>
                                <p class="stats-text">KEGIATAN</p>
                            </div>
                            <div class="stats-icon change-success">
                                <i class="material-icons">article</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card card-transparent stats-card">
                        <div class="card-body">
                            <div class="stats-info">
                                <h5 class="card-title">{{ $rescue }}<span class="stats-change stats-change-success">DATA</span></h5>
                                <p class="stats-text">RESCUE</p>
                            </div>
                            <div class="stats-icon change-success">
                                <i class="material-icons">support</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card card-transparent stats-card">
                        <div class="card-body">
                            <div class="stats-info">
                                <h5 class="card-title">{{ $user }}<span class="stats-change stats-change-success">DATA</span></h5>
                                <p class="stats-text">User</p>
                            </div>
                            <div class="stats-icon change-success">
                                <i class="material-icons">group_add</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card card-transparent stats-card">
                        <div class="card-body">
                            <div class="stats-info">
                                <h5 class="card-title">{{ $hak_akses }}<span class="stats-change stats-change-success">DATA</span></h5>
                                <p class="stats-text">HAK AKSES</p>
                            </div>
                            <div class="stats-icon change-success">
                                <i class="material-icons">handshake</i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="card mt-3">
                        <h5 class="card-header">Persebaran Spesies Amfibi dan Reptil</h5>
                        <div id="map" style="width: 100%;height:400px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    detailUrl: `{{ url('SuperAdmin/spesies/detail', encrypt($data->id)) }}`
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
                    detailUrl: `{{ url('SuperAdmin/spesies/detail', encrypt($data->id)) }}`
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
@endsection
