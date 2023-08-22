<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ebook;
use Illuminate\Support\Facades\Crypt;
use Str;

class SPEbook extends Controller
{
    // Fungsi untuk menampilkan daftar ebook
    function index(){
        $data['list'] = Ebook::get();
        return view('SuperAdmin.ebook.index', $data);
    }

    // Fungsi untuk menampilkan halaman tambah ebook
    function add(){
        return view('SuperAdmin.ebook.add');
    }

    // Fungsi untuk menyimpan data ebook yang baru ditambahkan
    function tambahAct(Request $req){
        // Mengunggah sampul ebook ke folder public/app/sampul
        $sampul = $req->file('sampul');
        $namaSampul = time().rand(1,10).'.'.$sampul->extension();
        $sampul->move(public_path('app/sampul'), $namaSampul);  

        // Mengunggah file PDF ebook ke folder public/app/pdf
        $pdf = $req->file('pdf');
        $namapdf = time().rand(1,10).'.'.$pdf->extension();
        $pdf->move(public_path('app/pdf'), $namapdf);  

        // Menyimpan data ebook ke database
        $ebook = new Ebook;
        $ebook->nama_ebook = $req->nama_ebook;
        $ebook->tahun = $req->tahun;
        $ebook->penulis = $req->penulis;
        $ebook->sampul =  'app/sampul/'.$namaSampul;
        $ebook->pdf =  'app/pdf/'.$namapdf;
        $ebook->save();

        // Mengarahkan pengguna kembali ke halaman daftar ebook dengan pesan sukses
        return redirect('SuperAdmin/ebook')->with('success', 'Data berhasil disimpan !');
    }

    // Fungsi untuk menampilkan halaman update ebook
    function update($ebook) {
        // Mendekripsi ID ebook menggunakan fungsi decrypt dari Crypt
        $id = Crypt::decrypt($ebook);

        // Menggunakan ID yang telah didekripsi untuk mendapatkan data dari database
        $data['list'] = Ebook::find($id);

        // Mengirim data ke view untuk ditampilkan dalam halaman update
        return view('SuperAdmin.ebook.update', $data);
    }

    // Fungsi untuk menyimpan data ebook yang telah diupdate
    function updateAct(Ebook $ebook, Request $req) {
        // Mengunggah sampul ebook ke folder public/app/sampul jika ada perubahan
        $sampul = $req->file('sampul');
        if ($sampul != null) {
            $namaSampul = time().rand(1,10).'.'.$sampul->extension();
            $sampul->move(public_path('app/sampul'), $namaSampul);
            $ebook->sampul = 'app/sampul/'.$namaSampul;
        }

        // Mengunggah file PDF ebook ke folder public/app/pdf jika ada perubahan
        $pdf = $req->file('pdf');
        if ($pdf != null) {
            $namapdf = time().rand(1,10).'.'.$pdf->extension();
            $pdf->move(public_path('app/pdf'), $namapdf);
            $ebook->pdf = 'app/pdf/'.$namapdf;
        }

        // Mengupdate data ebook di database
        $ebook->nama_ebook = $req->nama_ebook;
        $ebook->tahun = $req->tahun;
        $ebook->penulis = $req->penulis;
        $ebook->update();

        // Mengarahkan pengguna kembali ke halaman daftar ebook dengan pesan sukses
        return redirect('SuperAdmin/ebook')->with('success', 'Data berhasil diedit !');
    }

        // Fungsi untuk menghapus data Ebook berdasarkan ID yang dienkripsi
        function hapus($ebook){
    try {
        // Mendekripsi ID ebook menggunakan fungsi decrypt dari Crypt
        $id = Crypt::decrypt($ebook);

        // Menggunakan ID yang telah didekripsi untuk mendapatkan data Ebook dari database
        $ebookData = Ebook::find($id);

        if (!$ebookData) {
            // Jika data Ebook tidak ditemukan, kembalikan dengan pesan not found
            return back()->with('danger', 'Data Ebook not found.');
        }

        // Menghapus data Ebook dari database
        $ebookData->delete();

        // Mengarahkan pengguna kembali ke halaman sebelumnya dengan pesan success
        return back()->with('danger', 'Data berhasil dihapus !');
    } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
        // Jika terjadi kesalahan dalam dekripsi, kembalikan dengan pesan error
        return back()->with('danger', 'Error: Unable to decrypt Ebook ID.');
    }
}
}
