<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Berita extends Model
{
    use HasFactory;
    protected $table ='berita';

    function tanggalSaja(){
       
        return Carbon::parse($this->created_at)->isoFormat('D MMMM');
    }
    function tahunSaja(){
       
        return Carbon::parse($this->created_at)->isoFormat('Y');
    }

    function potongString(){
        return Str::limit($this->deskripsi, 100);
    }
   
   
}
