<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;

class SPAnggota extends Controller
{
    
    public function index()
    {
        
        $data['list_anggota'] = Anggota::all();

        return view('SuperAdmin.anggota.index', $data);
    }

    
    public function create()
    {
        

        return view('SuperAdmin.anggota.create');
    }

    
    public function store(Request $request)
    {
        // Check if the given 'nomor' already exists in the database
        $existingAnggota = Anggota::where('nomor', request('nomor'))->first();

        if ($existingAnggota) {
            // Jika nomor sudah ada di database, kembalikan ke halaman sebelumnya dengan pesan error.
            return redirect()->back()->with('error', 'Nomor ini sudah pernah didaftarkan sebelumnya.');
        }

        // Jika nomor belum ada di database, tambahkan anggota baru seperti biasa.
        $anggota = new Anggota();
        $anggota->nomor = request('nomor');
        $anggota->nama = request('nama');
        $anggota->email = request('email');
        $anggota->username = request('username');
        $anggota->confir_password = request('confir_password');
        $anggota->password =  bcrypt(request('confir_password'));
        $anggota->alamat = request('alamat');
        $anggota->status = '2';
        $anggota->handleUploadFoto();
        $anggota->save();

        return redirect('SuperAdmin/anggota')->with('success', 'Data berhasil disimpan !');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit(Anggota $anggota)
    {
        
        $data['anggota'] = $anggota;

        return view('SuperAdmin/anggota.edit', $data);
    }

    
    public function update($anggota)
    {
        $anggota = Anggota::find($anggota);
        $anggota->nomor = request('nomor');
        $anggota->nama = request('nama');
        $anggota->email = request('email');
        $anggota->username = request('username');
        $anggota->confir_password = request('confir_password');
        $anggota->password =  bcrypt(request('confir_password'));
        $anggota->alamat = request('alamat');
        $anggota->handleUploadFoto();
        $anggota->status= '2';
        $anggota->save();

        return redirect('SuperAdmin/anggota')->with('success', 'Data berhasil diedit !');
    }

    
    public function destroy($anggota)
    {
        Anggota::destroy($anggota);
        return back()->with('danger', 'Data berhasil dihapus !');
    }

    public function konfirmasi($anggota)
    {
        $anggota = Anggota::find($anggota);
        $anggota->password = bcrypt(request('confir_password'));
        $anggota->confir_password = request('confir_password');
        $anggota->status = 2;
        $anggota->save();

        return back()->with('success', 'Akun berhasil divaslidasi !');
    }
}
