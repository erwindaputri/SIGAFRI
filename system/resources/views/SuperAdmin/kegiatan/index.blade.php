@extends('Layout.Super-Admin.base')
@section('content')



    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA KEGIATAN</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('SuperAdmin/kegiatan/add') }}" class="btn btn-success btn-sm float-right">
                        Tambah data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responive">
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th><center>No.</center></th>
                                    <th><center>Nama</center></th>  
                                    <th><center>Kategori</center></th>
                                    <th><center>Tanggal</center></th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $kegiatan)
                                <tr>
                                    <td><center>{{ $loop->iteration }}</center></td>
                                    <td><center>{{ $kegiatan->nama_kegiatan }}</center></td>
                                    <td><center>{{ $kegiatan->kategori_kegiatan }}</center></td>
                                    <td><center>{{ $kegiatan->created_at}}</center></td>
                                    <td>
                                        <center>
                                            <div class="btn-group">
                                                <a href="{{ url('SuperAdmin/kegiatan/detail', encrypt($kegiatan->id)) }}" class="btn btn-sm btn-warning">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ url('SuperAdmin/kegiatan/update', encrypt($kegiatan->id)) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('SuperAdmin/kegiatan/hapus', $kegiatan->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
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


@endsection
