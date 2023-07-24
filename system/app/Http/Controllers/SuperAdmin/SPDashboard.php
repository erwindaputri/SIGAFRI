<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Spesies;
use App\Models\Kegiatan;
use App\Models\Ebook;
use App\Models\Rescue;
use App\Models\User;
use App\Models\HakAkses;
use App\Models\SuperAdmin;

class SPDashboard extends Controller{

    function index(){

        

        $data['reptilData'] = Spesies::where('kategori_spesies', 'Reptil')->get();
        $data['amfibiData'] = Spesies::where('kategori_spesies', 'Amfibi')->get();

        $data['spesies'] = Spesies::all()->count();
        $data['kegiatan'] = Kegiatan::all()->count();
        $data['ebook'] = Ebook::all()->count();
        $data['rescue'] = Rescue::all()->count();
        $data['user'] = User::all()->count();
        $data['hak_akses'] = HakAkses::all()->count();

        return view('SuperAdmin.dashboard', $data);
    }

}
