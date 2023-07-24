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
                            <div class="text">Reptil adalah hewan berdarah dingin dengan sisik yang melindungi tubuhnya dan
                                biasanya hidup di darat.</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @php
                    $perPage = 12;
                    $totalReptil = $list->count();
                    $totalPages = ceil($totalReptil / $perPage);
                    $currentPage = request()->query('page', 1);
                    $startIndex = ($currentPage - 1) * $perPage;
                    $slicedReptil = $list->slice($startIndex, $perPage);
                    @endphp

                    @foreach ($slicedReptil as $reptil)
                    <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box">
                                @if ($reptil->galeri->isNotEmpty())
                                    <img src="{{ url('public') }}/{{ $reptil->galeri->first()->gambar_spesies }}" alt="">
                                @endif
                                <div class="overlay-box">
                                    <div class="content">
                                        <div class="text">{{ $reptil->nama_spesies }}</div>
                                        <div class="link">
                                            <a href="{{ url('detailReptil',encrypt($reptil->id)) }}">Selengkapnya >></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <h3>{{ $reptil->nama_spesies }}</h3>
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
