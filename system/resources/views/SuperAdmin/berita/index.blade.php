@extends('Layout.Super-Admin.base')
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
                    <a href="{{ url('SuperAdmin/berita/add') }}" class="btn btn-success btn-sm float-right">
                        Tambah data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responive">
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>  
                                    <th>Kategori</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $berita)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $berita->nama_berita }}</td>
                                    <td>{{ $berita->kategori_berita }}</td>
                                    <td>{{ $berita->created_at}}</td>
                                    <td>
                                        
                                            <div class="btn-group">
                                                <a href="{{ url('SuperAdmin/berita/detail', encrypt($berita->id)) }}" class="btn btn-sm btn-warning">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ url('SuperAdmin/berita/update', encrypt($berita->id)) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('SuperAdmin/berita/hapus', $berita->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        
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
