<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
 
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table ='user';
   
    public function handleUploadFoto()
    {
        if (request()->hasFile('gambar_user')) {
            $this->handleDeleteFoto();
            $file = request()->file('gambar_user');
            $destination = "user";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->gambar_user = "app/" . $url;
            $this->save();
        }
    }

    public function handleDeleteFoto()
    {
        $gbrUser = $this->gambar_user;
        if ($gbrUser) {
            $path = public_path($gbrUser);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
   
}
