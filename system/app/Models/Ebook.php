<?php
 
 namespace App\Models;
 use Illuminate\Support\Str;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 
class Ebook extends Model
{
    
    protected $table = "ebook";


    function handleUploadPdf()
    {
        if (request()->hasFile('pdf')) {
            $this->handleDeletePdf();
            $file = request()->file('pdf');
            $destination = "pdf";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/" . $url;
            $this->save();
        }
    }
    function handleUploadSampul()
    {
        if (request()->hasFile('sampul')) {
            $this->handelDeleteSampul();
            $sampul = request()->file('sampul');
            $destination = "sampul";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $sampul->extension();
            $url = $sampul->storeAs($destination, $filename);
            $this->sampul = "app/" . $url;
            $this->save();
        }
    }
   
    function handelDeleteSampul(){
        $sampul= $this->sampul;
        if($sampul){
            $path = public_path($sampul);
        if(file_exists($path)){
            unlink($path);
        }
            return true;
        }
    }
    function handleDeletePdf(){
        $pdf= $this->pdf;
        if($pdf){
            $path = public_path($pdf);
        if(file_exists($path)){
            unlink($path);
        }
            return true;
        }
    }
}