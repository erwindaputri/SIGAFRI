<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HakAkses;
use Str;

class SPHakAkses extends Controller{
    function index(){
        
        $data['list'] = HakAkses::get();
        return view('SuperAdmin.HakAkses.index',$data);
    }

    function add(){
        
        return view('SuperAdmin.HakAkses.add');
    }

    function tambahAct(Request $req){
        $gambar = $req->file('gambar');
        $namagambar = time().rand(1,10).'.'.$gambar->extension();
        $gambar->move(public_path('app/gambar'), $namagambar);  
    
        $hak_akses = new HakAkses;
        $hak_akses->username = $req->username;
        $hak_akses->email = $req->email;
        $hak_akses->password = $req->password;
        $hak_akses->level = $req->level;
        $hak_akses->gambar = 'app/gambar/'.$namagambar;
        $hak_akses->save();
    
        return redirect('SuperAdmin/HakAkses')->with('success', 'Data berhasil disimpan!');
    }

    function update($id){
        
        $hak_akses = HakAkses::findOrFail($id);
        $data['list'] = $hak_akses;
        return view('SuperAdmin.HakAkses.update', $data);
    }

    function updateAct(HakAkses $hak_akses, Request $req){

        $gambar = $req->file('gambar');
        $namagambar = time().rand(1,10).'.'.$gambar->extension();
        $gambar->move(public_path('app/gambar'), $namagambar);  
    
        $hak_akses->username = $req->username;
        $hak_akses->email = $req->email;
        $hak_akses->password = $req->password;
        $hak_akses->level = $req->level;
        $hak_akses->gambar = 'app/gambar/'.$namagambar;
        $hak_akses->update();
    
        return redirect('SuperAdmin/HakAkses')->with('success', 'Data berhasil diupdate!');
    }    

    function hapus(HakAkses $hak_akses){

        $ambilDatahakAkses = $hak_akses->delete();
        return back()->with('danger', 'Data berhasil dihapus !');
    }

    
}