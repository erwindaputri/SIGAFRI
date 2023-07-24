<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Spesiesgaleri extends Model
{
    use HasFactory;

    protected $table ='galeri_spesies';

    function handleUploadFoto()
    {
        if (request()->hasFile('gambar_spesies')) {
            $this->handleDeleteFoto();
            $file = request()->file('gambar_spesies');
            $destination = "spesies";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->gambar_spesies = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteFoto(){
        $gambarGaleri = $this->gambar_spesies;
        if($gambarGaleri){
            $path = public_path($gambarGaleri);
        if(file_exists($path)){
            unlink($path);
        }
            return true;
        }
    }

}
