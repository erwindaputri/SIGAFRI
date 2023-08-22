@extends('Layout.Admin.base')
@section('content')



    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA BERITA</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('Admin/berita/add') }}" class="btn btn-success btn-sm float-right">
                        Tambah data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responive">
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th><center>No.</center></th>
                                    <th>Nama</th>  
                                    <th>Kategori</th>
                                    <th>Tanggal</th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $berita)
                                <tr>
                                    <td><center>{{ $loop->iteration }}</center></td>
                                    <td>{{ $berita->nama_berita }}</td>
                                    <td>{{ $berita->kategori_berita }}</td>
                                    <td>{{ $berita->created_at}}</td>
                                    <td>
                                        <center>
                                            <div class="btn-group">
                                                <a href="{{ url('Admin/berita/detail',encrypt($berita->id)) }}" class="btn btn-sm btn-warning">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ url('Admin/berita/update', $berita->id) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('Admin/berita/hapus', $berita) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
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
