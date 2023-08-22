@extends('LandingPage.landing')

@section('content')
<!-- Contoh penggunaan Font Awesome untuk ikon telepon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
            <p class="text-left" style="color: white">
                <i class="fas fa-phone-alt"></i> Nomor telepon:
                <a href="tel:{{ $rescue->nomor_telepon }}">{{ $rescue->nomor_telepon }}</a>
              </p>
              <p class="text-left" style="color: white">
                <i class="far fa-envelope"></i> Email: {{ $rescue->email }}
              </p>
              <p class="text-left" style="color: white">
                <i class="fas fa-map-marker-alt"></i> Daerah: {{ $rescue->alamat }}
              </p>
              
        </div>
    </div>
</div>
@endforeach


            </div>

        </div>
    </section>
@endsection
