@extends('Layout.Super-Admin.base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA ANGGOTA</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('SuperAdmin/anggota/create') }}" class="btn btn-success btn-sm float-right">
                        Tambah data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>nomor</th>
                                    <th>Nama</th>
                                    <th>Poto</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_anggota as $anggota)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>{{ $anggota->nomor }}</td>
                                        <td>{{ $anggota->nama }}</td>
                                        <td>
                                            <img src="{{ url("public/$anggota->poto") }}" style="width: 30%; height:30%">
                                        </td>
                                        <td class="text-center">
                                            @if ($anggota->status == 1)
                                                <form action="{{ url('SuperAdmin/anggota/konfirmasi', $anggota->nomor) }}" method="POST" onclick="return confirm('Yakin ingin validasi akun ini ?!')">
                                                    @csrf
                                                    @method("PUT")
                                                    <input type="text" value="{{ $anggota->confir_password }}" name="confir_password" hidden>
                                                    <button class="btn btn-primary"><span class="fa fa-check"></span> Konfirmasi</button>
                                                </form>
                                            @endif
                                            @if ($anggota->status == 2)
                                                <p>Akun Sudah Terdaftar</p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#detailModal{{ $anggota->nomor }}">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ url('SuperAdmin/anggota/edit', $anggota->nomor) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('SuperAdmin/anggota/delete', $anggota->nomor) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                               
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal Detail Anggota -->
                                    <div class="modal fade" id="detailModal{{ $anggota->nomor }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{ $anggota->nomor }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="detailModalLabel{{ $anggota->nomor }}">Detail Anggota: {{ $anggota->nama }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <!-- Gambar anggota di sebelah kiri -->
                                                                <img src="{{ url("public/$anggota->poto") }}" style="width: 50%;" alt="Foto Anggota">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <!-- Informasi anggota di sebelah kanan -->
                                                                <p>Nama: {{ $anggota->nama }}</p>
                                                                <p>Nomor: {{ $anggota->nomor }}</p>
                                                                <p>Username: {{ $anggota->username }}</p>
                                                                <p>Alamat: {{ $anggota->alamat }}</p>
                                                                <!-- tambahkan informasi anggota lainnya sesuai kebutuhan -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Akhir Modal Detail Anggota -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
