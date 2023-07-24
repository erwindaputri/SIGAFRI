<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;
use App\Models\Spesies;

class Anggota extends ModelAuthenticate
{

    protected $table ='anggota';
    public $primaryKey ="nomor";
    public $incrementing = false;

    function Spesies(){
		return $this->belongsTo('\App\Models\Spesies', 'nomor');
	}


    function handleUploadFoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "anggota";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
           

        }
    }


}
