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
                                <h2> <span>E-BOOK</span></h2>
                            </div>
                        </div>

                        <div class="text-column col-lg-8 col-md-12 col-sm-12">
                            <div class="text">Memberikan Informasi mengenai Publikasi Herpetologi Amfibi dan Reptil.</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @php
                    $perPage = 12;
                    $totalEbook = $list->count();
                    $totalPages = ceil($totalEbook / $perPage);
                    $currentPage = request()->query('page', 1);
                    $startIndex = ($currentPage - 1) * $perPage;
                    $slicedEbook = $list->slice($startIndex, $perPage);
                    @endphp

                    @foreach ($slicedEbook as $ebook)
                    <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ url('public') }}/{{ $ebook->sampul }}">
                                <div class="overlay-box">
                                    <div class="content">
                                        <div class="text">{{ $ebook->nama_spesies }}</div>
                                        <div class="link">
                                            <a href="{{ url('public') }}/{{ $ebook->pdf }}" class="link" target="_blank"><i class="flaticon-add"></i>Selengkapnya >></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <h3><a href="{{ url('public') }}/{{ $ebook->pdf }}" target="_blank">{{ $ebook->nama_ebook }}</a></h3>
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
