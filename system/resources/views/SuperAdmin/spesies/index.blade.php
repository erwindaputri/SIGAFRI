@extends('Layout.Super-Admin.base')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA SPESIES</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('SuperAdmin/spesies/add') }}" class="btn btn-success btn-sm float-right">
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
                                    <th>Nama Latin</th>
                                    <th>Kategori</th>
                                    <th><center>Aksi</center></th>
                                    {{-- <th><center>Status</center></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                <tr>
                                    <td><center>{{ $loop->iteration }}</center></td>
                                    
                                    <td>{{ $item->nama_spesies }}</td>
                                    <td>{{ $item->nama_latin }}</td>
                                    <td>{{ $item->kategori_spesies }}</td>
                                    <td>
                                        
                                            <center>
                                                <div class="btn-group">
                                                    <a href="{{ url('SuperAdmin/spesies/detail', encrypt($item->id)) }}" class="btn btn-sm btn-warning">
                                                        <i class="fa fa-info"></i>
                                                    </a>
                                                    <a href="{{ url('SuperAdmin/spesies/update', encrypt($item->id)) }}" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ url('SuperAdmin/spesies/hapus', $item->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
                                                        <i class="fa fa-trash"></i>
                                                        
                                                    </a>
                                                </div>
                                            </center>
                                        
                                        {{-- @if ($item->level == 1)
                                        <form action="{{ url('SuperAdmin/spesies/konfirmasi-spesies',$item->id) }}" method="POST">
                                        @csrf --}}
                                        {{-- @method("PUT")
                                            <button class="btn btn-sm btn-primary"><span class="fa fa-check"></span> Konfirmasi</button>
                                        </form> --}}
                                        {{-- @endif
                                        @if ($item->level == 2)
                                            <p>Sudah Di Konfirmasi</p>
                                        @endif --}}
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
