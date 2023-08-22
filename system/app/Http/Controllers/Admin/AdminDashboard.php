<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Spesies;
use App\Models\Berita;
use App\Models\Ebook;
use App\Models\Rescue;


class AdminDashboard extends Controller{

    function index(){

        

        $data['reptilData'] = Spesies::where('kategori_spesies', 'Reptil')->get();
        $data['amfibiData'] = Spesies::where('kategori_spesies', 'Amfibi')->get();

        $data['spesies'] = Spesies::all()->count();
        $data['berita'] = Berita::all()->count();
        $data['ebook'] = Ebook::all()->count();
        $data['rescue'] = Rescue::all()->count();
    

        
        return view('Admin.dashboard', $data);
    }

}
