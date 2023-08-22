@extends('LandingPage.landing')
@section('content')
    <section class="page-title" style="background-image:url(images/background/4.jpg)">
        <div class="auto-container">
            <div class="title-box">
                <h1>Berita</h1>
            </div>
        </div>
    </section>
  <!-- Tombol Seminar, Trip, dan Kegiatan -->
  <section class="button-section">
    <div class="auto-container">
        <div class="button-group text-center">
            <a href="{{ url('/seminar')}}" class="theme-btn btn-style-two">Seminar</a>
            <a href="{{ url('/trip')}}" class="theme-btn btn-style-two">Trip</a>
            <a href="{{ url('/kegiatan')}}" class="theme-btn btn-style-two">Kegiatan</a>
        </div>
    </div>
</section>


    <!-- Blog Section -->
    <section class="blog-section">

        <div class="auto-container">
            <!-- News Block -->
            <div class="news-block-two wow fadeIn">
                @php
                    // Mendapatkan kategori yang dipilih dari permintaan HTTP
                    $selectedCategory = request()->query('kategori');
                    $perPage = 6;
                    $totalBerita = $list->count();
                    $totalPages = ceil($totalBerita / $perPage);
                    $currentPage = request()->query('page', 1);
                    $startIndex = ($currentPage - 1) * $perPage;

                    // Melakukan filter berdasarkan kategori yang dipilih
                    $slicedBerita = $selectedCategory
                        ? $list->where('kategori_berita', $selectedCategory)->slice($startIndex, $perPage)
                        : $list->slice($startIndex, $perPage);
                @endphp

                

                @foreach ($slicedBerita as $list)
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!-- Image Column -->
                            <div class="image-column col-lg-5 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <figure class="image">
                                        <a href="#">
                                            <img src="{{ url('public') }}/{{ $list->gambar_berita }}" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>

                            <!-- Content Column -->
                            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <ul class="info">
                                        <li class="day">{{ $list->tanggalSaja() }}</li>
                                        <li class="day">{{ $list->tahunSaja() }}</li>
                                    </ul>
                                    <div class="content">
                                        <h3><a href="#">{{ Str::limit($list->nama_berita,50) }}</a></h3>
                                        <li class="text">{{ $list->kategori_berita }}</li>
                                        <div class="text">{!! $list->potongString() !!}</div>
                                        <div class="link-box"> <br>
                                            <a href="{{ url('/detailBerita', encrypt($list->id)) }}">Read More</a>
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
                @if ($currentPage > 1)
                    <li>
                        <a href="{{ url()->current() }}?page={{ $currentPage - 1 }}" class="prev">Previous</a>
                    </li>
                @endif
    
                @for ($i = 1; $i <= $totalPages; $i++)
                    <li>
                        <a href="{{ url()->current() }}?page={{ $i }}"
                            @if ($i == $currentPage) class="active" @endif>{{ $i }}</a>
                    </li>
                @endfor
    
                @if ($currentPage < $totalPages)
                    <li>
                        <a href="{{ url()->current() }}?page={{ $currentPage + 1 }}" class="next">Next</a>
                    </li>
                @endif
            </ul>
        </div>
    </section>
    <!-- End Blog Section -->
@endsection
