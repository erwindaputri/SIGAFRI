@extends('Layout.Super-Admin.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA E-BOOk</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('SuperAdmin/ebook/add') }}" class="btn btn-success btn-sm float-right">
                        Tambah data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responive">
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                       No.
                                    </th>
                                    <th>
                                       Nama
                                    </th>
                                    <th>
                                       Penulis
                                    </th>
                                    <th>
                                       Tahun
                                    </th>
                                    <th>
                                       sampul
                                    </th>
                                    <th>
                                       PDF
                                    </th>
                                    <th>
                                       Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $ebook)
                                    <tr>
                                        <td>
                                           {{ $loop->iteration }}
                                        </td>
                                        <td>
                                           {{ $ebook->nama_ebook }}
                                        </td>
                                        <td>
                                           {{ $ebook->penulis }}
                                        </td>
                                        <td>
                                           {{ $ebook->tahun }}
                                        </td>
                                        <td>
                                            <img src="{{ url('public') }}/{{ $ebook->sampul }}" alt="" style="width: 50px;height:50px">
                                        </td>
                                        <td>
                                           
                                                <a href="{{ url('public') }}/{{ $ebook->pdf }}" src="{{ url('public') }}/{{ $ebook->pdf }}" target="_parent" class="btn btn-info">
                                                    Lihat PDF
                                                </a>
                                            
                                        </td>

                                        <td>
                                           
                                                <div class="btn-group">

                                                    <a href="{{ url('SuperAdmin/ebook/update', encrypt($ebook->id)) }}" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ url('SuperAdmin/ebook/hapus', encrypt($ebook->id)) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
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
