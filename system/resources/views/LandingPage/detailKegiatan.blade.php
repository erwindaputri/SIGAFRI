@extends('LandingPage.landing')

@section('content')
    <section class="page-title" style="background-image:url(images/background/4.jpg)">
        <div class="auto-container">
            <div class="title-box">
                <h1> Kegiatan</h1>
            </div>
            <ul class="page-breadcrumb">
                <li><a href="">Home</a></li>
                <li>Berita</li>
                <li><a href="">Kegiatan</a></li>

            </ul>
        </div>
    </section>
    <div class="sidebar-page-container alternate">
        <div class="auto-container">
            <div class="row clearfix justify-content-center">
                <!-- Tambahkan kelas justify-content-center untuk membuatnya rata tengah -->
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <!-- News Block -->
                        <div class="news-block-three">
                            <div class="inner-box ">
                                <!-- Tambahkan class "text-center" untuk membuatnya rata tengah -->
                                <div class="image-box wow fadeIn text-center">
                                    <figure class="image">
                                        <img src="{{ url('public') }}/{{ $list->gambar_berita }}" alt=""
                                            style="max-width: 100%; height: auto;">
                                        <!-- Sesuaikan ukuran gambar dengan menambahkan styling inline -->
                                    </figure>
                                </div>
                                <!-- Content Column -->
                                <div class="content-box">
                                    <div class="inner-box">
                                        <ul class="info">
                                            <li class="day">{{ $list->tanggalSaja() }}</li>
                                            <li class="day">{{ $list->tahunSaja() }}</li>
                                        </ul>
                                        <div class="content">

                                            <h3>{{ $list->nama_berita }}</h3>
                                            <p>{!! $list->deskripsi !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Other Option -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
