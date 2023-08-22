<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Spesies;
use App\Models\Berita;
use App\Models\Ebook;
use App\Models\Rescue;
use App\Models\anggota;
use App\Models\Spesiesgaleri;

class LPHome extends Controller
{

    function index()
    {

        $data['reptilData'] = Spesies::where('kategori_spesies', 'Reptil')->get();
        $data['amfibiData'] = Spesies::where('kategori_spesies', 'Amfibi')->get();

        return view('landingPage.home', $data);
    }

    function amfibi()
    {
        $data['list_spesies'] =  Spesies::with('galeri')->where('kategori_spesies', 'Amfibi')->get();
        $data['list'] =  Spesies::with('galeri')->where('kategori_spesies', 'Amfibi')->get();
        return view('landingPage.amfibi', $data);
    }
    function reptil()
    {

        $data['list'] =  Spesies::with('galeri')->where('kategori_spesies', 'Reptil')->get();

        $data['list_spesies'] =  Spesies::with('galeri')->where('kategori_spesies', 'Reptil')->get();
        return view('landingPage.reptil', $data);
    }

    function detailReptil($spesies)
    {
        $id = decrypt($spesies);
        $data['list'] = Spesies::find($id);
        $data['list'] =  Spesies::with('galeri')->find($id);
        return view('landingPage.detailReptil', $data);
    }

    function detailAmfibi($spesies)
    {
        $id = decrypt($spesies);
        $data['list'] = Spesies::find($id);
        $data['list'] =  Spesies::with('galeri')->find($id);

        return view('landingPage.detailAmfibi', $data);
    }

    function berita (){

        $data['list'] = Berita::get();
        return view('landingPage.berita', $data);

    }
    function detailBerita($berita)
    {
        $id = decrypt($berita);
        $data['list'] = Berita::find($id);
        return view('landingPage.detailBerita', $data);
    }
    

    function seminar()
    {

        $data['list'] =  Berita::where('kategori_berita', 'Seminar')->get();

        return view('landingPage.berita', $data);
    }

    function detailSeminar($berita)
    {

        $id = decrypt($berita);
        $data['list'] = Berita::find($id);
        return view('landingPage.detailSeminar', $data);
    }
    function trip()
    {

        $data['list'] =  Berita::where('kategori_berita', 'Trip')->get();

        return view('landingPage.berita', $data);
    }

    function detailTrip($berita)
    {

        $id = decrypt($berita);
        $data['list'] = Berita::find($id);
        return view('landingPage.detailTrip', $data);
    }

    function Kegiatan()
    {

        $data['list'] =  Berita::where('kategori_berita', 'Kegiatan')->get();

        return view('landingPage.berita', $data);
    }

    function detailKegiatan($berita)
    {

        $id = decrypt($berita);
        $data['list'] = Berita::find($id);
        return view('landingPage.detailKegiatan', $data);
    }


    function ebook()
    {

        $data['list'] = Ebook::get();

        return view('landingPage.ebook', $data);
    }


    function TambahSpesies()
    {

        $data['list'] = Spesies::with('galeri')->get();

        return view('landingPage.TambahSpesies', $data);
    }
    function Tambah()
    {

        $data['list'] = Spesies::with('galeri')->get();

        return view('landingPage.Tambah', $data);
    }
    

    function storeSpesiesAnggota(Request $req){

        $spesies = new Spesies;
        $spesies->id_anggota = $req->id_anggota;
        $spesies->nama_spesies = $req->nama_spesies;
        $spesies->nama_latin = $req->nama_latin;
        $spesies->kategori_spesies = $req->kategori_spesies;
        $spesies->kategori_jenis = $req->kategori_jenis;
        $spesies->famili = $req->famili;
        $spesies->nama_daerah = $req->nama_daerah;
        $spesies->lat = $req->lat;
        $spesies->lng = $req->lng;
        $spesies->deskripsi = $req->deskripsi; // Tambahkan deskripsi yang diisi dari form
        $spesies->level = '2';
        $simpanSpesies = $spesies->save();
        if ($simpanSpesies == 1) {
            $filest = $req->file('gambar_spesies');
            for ($i=0; $i < count($filest); $i++) { 
                    
                $name = time().rand(1,10).'.'.$filest[$i]->extension();
                $filest[$i]->move(public_path('app/spesies'), $name);  
                $galeri = new Spesiesgaleri;
                $galeri->id_spesies = $spesies->id;
                $galeri->gambar_spesies =  'app/spesies/'.$name;
                $simpanGaleri = $galeri->save();
            }
            return redirect('/TambahSpesies')->with('success', 'Data Spesies berhasil disimpan!');
        }
        return back()->with('danger', 'Data Spesies gagal disimpan!, coba ulangi kembali.');
    }

    function detailspesies($spesies)
    {

        $id = decrypt($spesies);
        $data['list'] =  Spesies::with('galeri')->find($id);

        return view('landingPage.detailspesies', $data);
    }

    function rescue()
    {

        $data['list'] = Rescue::get();

        return view('landingPage.rescue', $data);
    }
}
