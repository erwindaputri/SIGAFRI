<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table ='kegiatan';

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
