@extends('LandingPage.landing')

@section('content')
    <!-- Projects Section -->
    <section class="projects-section">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="sortable-masonry">
                <div class="heading-box clearfix">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="sec-title"> 
                                <h2> <span>SPESIES AMFIBI</span></h2>
                            </div>
                        </div>

                        <div class="text-column col-lg-8 col-md-12 col-sm-12">
                            <div class="text">Amfibi, hewan bertulang belakang, dapat hidup di dua habitat, air dan darat, dengan kulit licin, suhu tubuh tergantung pada lingkungan, dan memiliki kelenjar tanpa sisik.</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @php
                    $perPage = 12;
                    $totalAmfibi = $list->count();
                    $totalPages = ceil($totalAmfibi / $perPage);
                    $currentPage = request()->query('page', 1);
                    $startIndex = ($currentPage - 1) * $perPage;
                    $slicedAmfibi = $list->slice($startIndex, $perPage);
                    @endphp

                    @foreach ($slicedAmfibi as $amfibi)
                    <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box">
                                @if ($amfibi->galeri->isNotEmpty())
                                    <img src="{{ url('public') }}/{{ $amfibi->galeri->first()->gambar_spesies }}" alt="">
                                @endif
                                <div class="overlay-box">
                                    <div class="content">
                                        <div class="text">{{ $amfibi->nama_spesies }}</div>
                                        <div class="link">
                                            <a href="{{ url('detailAmfibi',encrypt($amfibi->id)) }}">Selengkapnya >></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <h3>{{ $amfibi->nama_spesies }}</h3>
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
    <!-- End Projects Section -->
@endsection
