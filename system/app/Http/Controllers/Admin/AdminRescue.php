<?php
 
 namespace App\Http\Controllers\Admin;
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use App\Models\Rescue;
 use Str;
 
class AdminRescue extends Controller
{
   
    function index(){
        
        $data['list'] = Rescue::get();
        return view('Admin.rescue.index', $data);
    }
    function add(){
        
        return view('Admin.rescue.add');
    }

    function tambahAct(Request $req){

  
        $rescue = new Rescue;
        $rescue->nomor_telepon = $req->nomor_telepon;
        $rescue->email = $req->email;
        $rescue->alamat = $req->alamat;
        $rescue->save();
        return redirect('Admin/rescue')->with('success', 'Data berhasil disimpan !');
    }
    function update(Rescue $rescue){
        
        $data['list'] = $rescue;
        return view('Admin.rescue.update', $data);
    }

    function updateAct(Rescue $rescue, Request $req)
    {
        $rescue->nomor_telepon = $req->nomor_telepon;
        $rescue->email = $req->email;
        $rescue->alamat = $req->alamat;

        $rescue->update();

        return redirect('Admin/rescue')->with('warning','Data Berhasil Diedit');
    }

    function hapus(Rescue $rescue){

        $ambilDataRescue = $rescue->delete();
        return back()->with('danger', 'Data berhasil dihapus !');
    }
}