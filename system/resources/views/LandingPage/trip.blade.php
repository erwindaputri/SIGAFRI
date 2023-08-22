@extends('LandingPage.landing')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/4.jpg)">
        <div class="auto-container">
            <div class="title-box">
                <h1>Trip</h1>
            </div>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Berita</li>
                <li>TRIP</li>
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
                $totalTrip = $list->count();
                $totalPages = ceil($totalTrip / $perPage);
                $currentPage = request()->query('page', 1);
                $startIndex = ($currentPage - 1) * $perPage;
                $slicedTrip = $list->slice($startIndex, $perPage);
                @endphp

                @foreach ($slicedTrip as $trip)
                <div class="inner-box">
                    <div class="row clearfix">
                        <!-- Image Column -->
                        <div class="image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <figure class="image">
                                    <a href="#">
                                        <img src="{{ url('public') }}/{{ $trip->gambar_berita }}" alt="">
                                    </a>
                                </figure>
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <ul class="info">
                                    <li class="day">{{ $trip->tanggalSaja() }}</li>
                                    <li class="day">{{ $trip->tahunSaja() }}</li>
                                </ul>
                                <div class="content">
                                    <h3><a href="#">{{ Str::words($trip->nama_berita, 4, '...') }}</a></h3>
                                    <div class="text">{!! $trip->potongString() !!}</div>
                                    <div class="link-box">
                                        <a href="{{ url('/detailTrip', encrypt($trip->id)) }}">
                                            @if (str_word_count($trip->nama_berita) > 4)
                                                Read More
                                            @else
                                                Read more
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
