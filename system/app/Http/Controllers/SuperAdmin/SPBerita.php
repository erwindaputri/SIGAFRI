<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Crypt; 
use Str;

class SPBerita extends Controller{

    function index(){
        
        $data['list'] = Berita::get();
        return view('SuperAdmin.berita.index',$data);
    }

    function add(){
        
        return view('SuperAdmin.berita.add');
    }

     function tambahAct(Request $req){

        $gambar_berita = $req->file('gambar_berita');
        $namagambarberita = time().rand(1,10).'.'.$gambar_berita->extension();
        $gambar_berita->move(public_path('app/gambar_berita'), $namagambarberita);  

        $berita = new Berita;
        $berita->nama_berita = $req->nama_berita;
        $berita->kategori_berita = $req->kategori_berita;
        $berita->gambar_berita =  'app/gambar_berita/'.$namagambarberita;
        // Pastikan 'deskripsi' tidak kosong sebelum menyimpan data
    if ($req->deskripsi == '') {
        return back()->with('danger', 'Deskripsi harus diisi.');
    }
    
    $berita->deskripsi = $req->deskripsi;
        $berita->save();
        return redirect('SuperAdmin/berita')->with('success', 'Data berhasil disimpan !');
    }

    function detail($berita){
        
        $id = decrypt($berita);
        $data['list'] =  Berita::findOrFail($id);
        return view('SuperAdmin.berita.detail',$data);
    } 

   function update($berita) {
    $id = Crypt::decrypt($berita); // Gunakan Crypt::decrypt() daripada decrypt()
    $data['list'] = Berita::findOrFail($id);
    
    return view('SuperAdmin.berita.update', $data);
}

    function updateAct(Berita $berita, Request $req){

        if ($req->hasFile('gambar_berita')) {
            $gambar_berita = $req->file('gambar_berita');
            if ($gambar_berita) {
                $namagambarberita = time().rand(1,10).'.'.$gambar_berita->extension();
                $gambar_berita->move(public_path('app/gambar_berita'), $namagambarberita);
                $berita->gambar_berita = 'app/gambar_berita/'.$namagambarberita;
            }
        }
        
        $berita->nama_berita = $req->nama_berita;
        $berita->kategori_berita = $req->kategori_berita;
        if ($req->deskripsi == '') {
            return back()->with('danger', 'Deskripsi harus diisi.');
        }
        $berita->update();
        
        return redirect('SuperAdmin/berita')->with('success', 'Data berhasil diedit !');
        
    }

    function hapus(Berita $berita){

        $ambilDataberita = $berita->delete();
        return back()->with('danger', 'Data berhasil dihapus !');
    }

}
