<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SPAuth extends Controller
{
    public function login()
    {
        return view('login');
    }  

    function aksiLogin(){

        if (auth()->guard('super-admin')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('SuperAdmin/dashboard')->with('success', 'Login Berhasil');
        }

        if (auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('Admin/dashboard')->with('success', 'Login Berhasil');
        }

        if (auth()->guard('anggota')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('/')->with('success', 'Login Berhasil');
        }

        return redirect('login');
    }

    public function logout(Request $request){
		
		auth()->guard('super-admin')->logout();
		auth()->guard('admin')->logout();
		auth()->guard('anggota')->logout();
		
		return redirect('/');
	}

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        
        $existingAnggota = Anggota::where('nomor', $request->nomor)->first();

        if ($existingAnggota) {
            // Jika nomor sudah ada di database, tampilkan pesan error dan kembali ke halaman sebelumnya (create view).
            return redirect()->back()->with('error', 'Nomor ini sudah pernah didaftarkan sebelumnya.');
        }
        // Jika nomor belum ada di database, tambahkan anggota baru seperti biasa.
        $anggota = new Anggota();
        $anggota->nomor = $request->nomor;
        $anggota->nama = $request->nama;
        $anggota->username = $request->username;
        $anggota->email = $request->email;
        $anggota->confir_password = $request->confir_password;
        $anggota->alamat = $request->alamat;
        $anggota->handleUploadFoto();
        $anggota->status = '1';
        $anggota->save();
    
        return redirect('/login')->with('success', 'Registrasi berhasil');
    }
    
    
}
