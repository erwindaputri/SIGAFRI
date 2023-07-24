@extends('LandingPage.landing')

@section('content')
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title style-two">
                <div class="row clearfix">
                    <div class="title-column col-lg-4 col-md-12 col-sm-12">
                        <h2><span>Rescue</span></h2>
                    </div>
                    <div class="text-column col-lg-8 col-md-12 col-sm-12">
                        <div class="text">Memberikan bantuan dan pertolongan untuk konflik satwa di permukiman masyarakat.
                            Info lebih lanjut hubungi kontak di bawah ini!.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $perPage = 12;
                    $totalRescue = $list->count();
                    $totalPages = ceil($totalRescue / $perPage);
                    $currentPage = request()->query('page', 1);
                    $startIndex = ($currentPage - 1) * $perPage;
                    $slicedRescue = $list->slice($startIndex, $perPage);
                @endphp

@foreach ($slicedRescue as $rescue)
<div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeIn">
    <div class="inner-box">
        <div class="caption-box" style="background-color: rgb(24, 96, 60);">
            <p class="text-left" style="color: white ">Nomor telepon: {{ $rescue->nomor_telepon }}</p>
            <p class="text-left"style="color: white">Email: {{ $rescue->email }}</p>
            <p class="text-left" style="color: white">Domisili: {{ $rescue->alamat }}</p>
        </div>
    </div>
</div>
@endforeach


            </div>

        </div>
    </section>
@endsection
