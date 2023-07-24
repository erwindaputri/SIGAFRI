<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Crypt; 
use Str;

class SPKegiatan extends Controller{

    function index(){
        
        $data['list'] = Kegiatan::get();
        return view('SuperAdmin.kegiatan.index',$data);
    }

    function add(){
        
        return view('SuperAdmin.kegiatan.add');
    }

     function tambahAct(Request $req){

        $gambar_kegiatan = $req->file('gambar_kegiatan');
        $namagambarkegiatan = time().rand(1,10).'.'.$gambar_kegiatan->extension();
        $gambar_kegiatan->move(public_path('app/gambar_kegiatan'), $namagambarkegiatan);  

        $kegiatan = new Kegiatan;
        $kegiatan->nama_kegiatan = $req->nama_kegiatan;
        $kegiatan->kategori_kegiatan = $req->kategori_kegiatan;
        $kegiatan->gambar_kegiatan =  'app/gambar_kegiatan/'.$namagambarkegiatan;
        if ($req->deskripsi == '') {
            return back()->with('danger', 'Deskripsi harus diisi.');
        }
        $kegiatan->save();
        return redirect('SuperAdmin/kegiatan')->with('success', 'Data berhasil disimpan !');
    }

    function detail($kegiatan){
        
        $id = decrypt($kegiatan);
        $data['list'] =  Kegiatan::findOrFail($id);
        return view('SuperAdmin.kegiatan.detail',$data);
    } 

   function update($kegiatan) {
    $id = Crypt::decrypt($kegiatan); // Gunakan Crypt::decrypt() daripada decrypt()
    $data['list'] = Kegiatan::findOrFail($id);
    return view('SuperAdmin.kegiatan.update', $data);
}

    function updateAct(Kegiatan $kegiatan, Request $req){

        if ($req->hasFile('gambar_kegiatan')) {
            $gambar_kegiatan = $req->file('gambar_kegiatan');
            if ($gambar_kegiatan) {
                $namagambarkegiatan = time().rand(1,10).'.'.$gambar_kegiatan->extension();
                $gambar_kegiatan->move(public_path('app/gambar_kegiatan'), $namagambarkegiatan);
                $kegiatan->gambar_kegiatan = 'app/gambar_kegiatan/'.$namagambarkegiatan;
            }
        }
        
        $kegiatan->nama_kegiatan = $req->nama_kegiatan;
        $kegiatan->kategori_kegiatan = $req->kategori_kegiatan;
        if ($req->deskripsi == '') {
            return back()->with('danger', 'Deskripsi harus diisi.');
        }
        $kegiatan->update();
        
        return redirect('SuperAdmin/kegiatan')->with('success', 'Data berhasil diedit !');
        
    }

    function hapus(Kegiatan $kegiatan){

        $ambilDataKegiatan = $kegiatan->delete();
        return back()->with('danger', 'Data berhasil dihapus !');
    }

}
