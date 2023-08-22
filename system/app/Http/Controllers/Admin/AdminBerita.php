<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Crypt; 
use Str;

class AdminBerita extends Controller{

    function index(){
        
        $data['list'] = Berita::get();
        return view('Admin.berita.index',$data);
    }

    function add(){
        
        return view('Admin.berita.add');
    }

     function tambahAct(Request $req){

        $gambar_berita = $req->file('gambar_berita');
        $namagambarberita = time().rand(1,10).'.'.$gambar_berita->extension();
        $gambar_berita->move(public_path('app/gambar_berita'), $namagambarberita);  

        $berita = new Berita;
        $berita->nama_berita = $req->nama_berita;
        $berita->kategori_berita = $req->kategori_berita;
        $berita->gambar_berita =  'app/gambar_berita/'.$namagambarberita;
        // Validasi deskripsi harus diisi
        if ($req->deskripsi == '') {
            return back()->with('danger', 'Deskripsi harus diisi.');
        } else {
            $berita->deskripsi = $req->deskripsi;
        }
        $berita->save();
        return redirect('Admin/berita')->with('success', 'Data berhasil disimpan !');
    }

    function detail($berita){
        
        $id = decrypt($berita);
        $data['list'] =  Berita::findOrFail($id);
        return view('Admin.berita.detail',$data);
    } 

   function update($berita) {

    $data['list'] = Berita::findOrFail($berita);
    
    return view('Admin.berita.update', $data);
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
        // Validasi deskripsi harus diisi
        if ($req->deskripsi == '') {
            return back()->with('danger', 'Deskripsi harus diisi.');
        } else {
            $berita->deskripsi = $req->deskripsi;
        }
        $berita->update();
        
        return redirect('Admin/berita')->with('success', 'Data berhasil diedit !');
        
    }

    function hapus(Berita $berita){

        $ambilDataberita = $berita->delete();
        return back()->with('danger', 'Data berhasil dihapus !');
    }

}
