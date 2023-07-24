@extends('Layout.Super-Admin.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA SUPER ADMIN</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('SuperAdmin/superadmin/create') }}" class="btn btn-success btn-sm float-right">
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
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_superadmin as $superadmin)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>{{ $superadmin->nama }}</td>
                                        <td>{{ $superadmin->email }}</td>
                                        <td>
                                            <img src="{{ url("public/$superadmin->poto") }}" style="width: 30%; height:30%" alt="Foto Super Admin">
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" data-toggle="modal" data-target="#infoModal{{ $superadmin->id }}" class="btn btn-sm btn-info">
                                                    <i class="fa fa-info"></i>
                                                </button>
                                                <a href="{{ url('SuperAdmin/superadmin/edit', $superadmin->id) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('SuperAdmin/superadmin/delete', $superadmin->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?!')">
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

    <!-- Modal Detail -->
    @foreach ($list_superadmin as $superadmin)
        <div class="modal fade" id="infoModal{{ $superadmin->id }}" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel{{ $superadmin->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="infoModalLabel{{ $superadmin->id }}">Detail superadmin: {{ $superadmin->nama }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ url('public') }}/{{ $superadmin->poto }}" width="20%">
                        <br>
                        <p>Nama: {{ $superadmin->nama }}</p>
                        <p>Username: {{ $superadmin->username }}</p>
                        <p>Email: {{ $superadmin->email }}</p>
                        <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @section('scripts')
        <script>
            $(document).ready(function() {
                $('.btn-modal-detail').click(function() {
                    var nama = $(this).data('nama');
                    var email = $(this).data('email');
                    var poto = $(this).data('poto');

                    $('#modal-detail-nama').text(nama);
                    $('#modal-detail-email').text(email);
                    $('#modal-detail-poto').attr('src', poto);
                });
            });
        </script>
    @endsection
@endsection
