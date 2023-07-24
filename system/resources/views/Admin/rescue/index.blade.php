@extends('Layout.Admin.base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA RESCUE</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('Admin/rescue/add') }}" class="btn btn-success btn-sm float-right">
                        Tambah data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th><center>No.</center></th>
                                    <th><center>No Telepon/WA</center></th>  
                                    <th><center>Email</center></th>
                                    <
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $rescue)
                                <tr>
                                    <td><center>{{ $loop->iteration }}</center></td>
                                    <td><center>{{ $rescue->nomor_telepon }}</center></td>
                                    <td><center>{{ $rescue->email }}</center></td>
                                    
                                    <td>
                                        <center>
                                            <div class="btn-group">
                                                <a type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal{{ $rescue->id }}"">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ url('Admin/rescue/update', encrypt($rescue->id)) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('Admin/rescue/hapus', $rescue->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <!-- Tombol untuk membuka modal detail -->
                                                {{-- <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal{{ $rescue->id }}">
                                                    Detail
                                                </button> --}}
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Rescue -->
    @foreach ($list as $rescue)
        <div class="modal fade" id="detailModal{{ $rescue->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{ $rescue->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel{{ $rescue->id }}">Detail Rescue</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Isi detail rescue -->
                        <p>No Telepon/WA: {{ $rescue->nomor_telepon }}</p>
                        <p>Email: {{ $rescue->email }}</p>
                        <p>Alamat: {{ $rescue->alamat }}</p>
                        <!-- tambahkan informasi rescue lainnya sesuai kebutuhan -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Akhir Modal Detail Rescue -->
@endsection
