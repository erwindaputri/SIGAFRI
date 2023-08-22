<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Spesies;
use App\Models\Berita;
use App\Models\Ebook;
use App\Models\Rescue;
use App\Models\Admin;
use App\Models\Anggota;
use App\Models\SuperAdmin;

class SPDashboard extends Controller{

    function index(){

        

        $data['reptilData'] = Spesies::where('kategori_spesies', 'Reptil')->get();
        $data['amfibiData'] = Spesies::where('kategori_spesies', 'Amfibi')->get();

        $data['spesies'] = Spesies::all()->count();
        $data['berita'] = Berita::all()->count();
        $data['ebook'] = Ebook::all()->count();
        $data['rescue'] = Rescue::all()->count();
        $data['admin'] = Admin::all()->count();
        $data['anggota'] = Anggota::all()->count();
        $data['superadmin'] = SuperAdmin::all()->count();

        return view('SuperAdmin.dashboard', $data);
    }

}
