@extends('LandingPage.landing')
@section('content')


    <!--Cart Section-->
    <section class="cart-section">
        <div class="container mt-3">
            <div class="row">
                <!-- Kolom untuk judul -->
                <div class="col-md-6">
                    <h2>Data Spesies Saya</h2>
                </div>
                <!-- Kolom untuk tombol Tambah -->
                <div class="col-md-6 text-right">
                    <a href="{{ url('/Tambah') }}" class="btn btn-primary">Tambah</a>
                </div>
            </div>
        </div>
        <div class="auto-container">
            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th>No. </th>
                                <th>Nama </th>
                                <th>Nama Latin</th>
                                <th>Kategori</th>
                                <th>Jenis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $perPage = 10;
                                $totalSpesies = $list->count();
                                $totalPages = ceil($totalSpesies / $perPage);
                                $currentPage = request()->query('page', 1);
                                $startIndex = ($currentPage - 1) * $perPage;
                                $slicedSpesies = $list->slice($startIndex, $perPage);
                            @endphp

                            @php
                                // Menggunakan model Eloquent untuk mengambil data dan mengurutkannya berdasarkan kolom 'id'
                                $sortedList = \App\Models\Spesies::where('id_anggota', Auth::guard('anggota')->user()->nomor)
                                    ->orderBy('id')
                                    ->get();
                            @endphp

                            @foreach ($sortedList as $spesies)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $spesies->nama_spesies }}</td>
                                    <td>{{ $spesies->nama_latin }}</td>
                                    <td>{{ $spesies->kategori_spesies }}</td>
                                    <td>{{ $spesies->kategori_jenis }}</td>
                                    <td>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ url('/detailspesies',encrypt($spesies->id)) }}" class="btn btn-primary">Detail</a>
                                    </div>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div style="margin-top: 50px;"></div>
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
    </section>
    
    <!-- Modal Detail Spesies -->
    @foreach ($sortedList as $spesies)
        <div class="modal fade" id="detailModal{{ $spesies->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{ $spesies->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel{{ $spesies->id }}">Detail Spesies</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Isi detail spesies -->
                        <p>Nama: {{ $spesies->nama_spesies }}</p>
                        <p>Nama Latin: {{ $spesies->nama_latin }}</p>
                        <p>Kategori: {{ $spesies->kategori_spesies }}</p>
                        <p>Jenis: {{ $spesies->kategori_jenis }}</p>
                        <!-- tambahkan informasi spesies lainnya sesuai kebutuhan -->
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- End Modal Detail Spesies -->
@endsection
