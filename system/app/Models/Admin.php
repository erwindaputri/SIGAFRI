<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;
use App\Models\Spesies;

class Admin extends ModelAuthenticate
{

    protected $table ='admin';
    public $primaryKey ="id";

    function Spesies(){
		return $this->belongsTo('\App\Models\Spesies', 'id');
	}
    
    function handleUploadFoto()
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
