<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Anggota;
use App\Models\Admin;
use App\Models\SuperAdmin;

class Spesies extends Model
{
    use HasFactory;
    protected $table ='spesies';
   
    public function galeri(){
        return $this->hasMany(Spesiesgaleri::class, 'id_spesies', 'id');
    }
    
    function Anggota(){
		return $this->belongsTo('\App\Models\Anggota', 'id_anggota');
	}

    function Admin(){
		return $this->belongsTo('\App\Models\Admin', 'id_anggota');
	}

    function SuperAdmin(){
		return $this->belongsTo('\App\Models\SuperAdmin', 'id_anggota');
	}


    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "admin";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
           

        }
    }
}
