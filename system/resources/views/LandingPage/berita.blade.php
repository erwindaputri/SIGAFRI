@extends('LandingPage.landing')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/4.jpg)">
        <div class="auto-container">
            <div class="title-box">
                <h1>Berita</h1>
            </div>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Kegiatan</li>
                <li>Berita</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="auto-container">
            <!-- News Block -->
            <div class="news-block-two wow fadeIn">
                @php
                $perPage = 6;
                $totalBerita = $list->count();
                $totalPages = ceil($totalBerita / $perPage);
                $currentPage = request()->query('page', 1);
                $startIndex = ($currentPage - 1) * $perPage;
                $slicedBerita = $list->slice($startIndex, $perPage);
                @endphp

                @foreach ($slicedBerita as $berita)
                <div class="inner-box">
                    <div class="row clearfix">
                        <!-- Image Column -->
                        <div class="image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <figure class="image">
                                    <a href="#">
                                        <img src="{{ url('public') }}/{{ $berita->gambar_kegiatan }}" alt="">
                                    </a>
                                </figure>
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <ul class="info">
                                    <li class="day">{{ $berita->tanggalSaja() }}</li>
                                    <li class="day">{{ $berita->tahunSaja() }}</li>
                                </ul>
                                <div class="content">
                                    <h3><a href="#">{{ $berita->nama_kegiatan }}</a></h3>
                                    <div class="text">{!! $berita->potongString() !!}</div>
                                    <div class="link-box">
                                        <a href="{{ url('/detailBerita', encrypt($berita->id)) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
            <!-- Styled Pagination -->
            <div class="styled-pagination text-center">
                <ul class="clearfix">
                    @for ($i = 1; $i <= $totalPages; $i++)
                        <li>
                            <a href="{{ url()->current() }}?page={{ $i }}" @if ($i == $currentPage) class="active" @endif>{{ $i }}</a>
                        </li>
                    @endfor
                </ul>
            </div>
            <!-- End Styled Pagination -->
        </div>
    </section>
    <!-- End Blog Section -->
@endsection
