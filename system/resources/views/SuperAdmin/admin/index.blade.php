@extends('Layout.Super-Admin.base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA ADMIN</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('SuperAdmin/admin/create') }}" class="btn btn-success btn-sm float-right">
                        Tambah data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Poto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_admin as $admin)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-center">{{ $admin->nama }}</td>
                                        <td class="text-center">{{ $admin->email }}</td>
                                        <td class="text-center">
                                            <img src="{{ url("public/$admin->poto") }}" style="width: 30%; height:30%">
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a type="button" data-toggle="modal" data-target="#infoModal{{ $admin->id }}"class="btn btn-sm btn-info">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ url('SuperAdmin/admin/edit', $admin->id) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('SuperAdmin/admin/delete', $admin->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <!-- Button Info untuk memunculkan modal -->
                                                {{-- <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#infoModal{{ $admin->id }}">
                                                    <i class="fa fa-info-circle"></i>
                                                </button> --}}
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal Info untuk setiap admin -->
                                    <div class="modal fade" id="infoModal{{ $admin->id }}" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel{{ $admin->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="infoModalLabel{{ $admin->id }}">Detail Admin: {{ $admin->nama }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{ url('public') }}/{{ $admin->poto }}" width="20%">
                                                    <br>
                                                    <p>Nama: {{ $admin->nama }}</p>
                                                    <p>Username: {{ $admin->username }}</p>
                                                    <p>Email: {{ $admin->email }}</p>
                                                    <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Info -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
