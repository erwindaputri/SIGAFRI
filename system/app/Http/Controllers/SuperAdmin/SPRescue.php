<?php
 
 namespace App\Http\Controllers\SuperAdmin;
 use App\Http\Controllers\Controller;
 use Illuminate\Support\Facades\Crypt; 
 use Illuminate\Http\Request;
 use App\Models\Rescue;
 use Str;
 
class SPRescue extends Controller
{
   
    function index(){
        
        $data['list'] = Rescue::get();
        return view('SuperAdmin.rescue.index', $data);
    }
    function add(){
        
        return view('SuperAdmin.rescue.add');
    }

    function tambahAct(Request $req){

  
        $rescue = new Rescue;
        $rescue->nomor_telepon = $req->nomor_telepon;
        $rescue->email = $req->email;
        $rescue->alamat = $req->alamat;
        $rescue->save();
        return redirect('SuperAdmin/rescue')->with('success', 'Data berhasil disimpan !');
    }
    function update($rescue) {
        $id = Crypt::decrypt($rescue); // Gunakan Crypt::decrypt() daripada decrypt()
        $data['list'] = Rescue::findOrFail($id);
        return view('SuperAdmin.rescue.update', $data);
    }

    function updateAct(Rescue $rescue, Request $req)
    {
        $rescue->nomor_telepon = $req->nomor_telepon;
        $rescue->email = $req->email;
        $rescue->alamat = $req->alamat;

        $rescue->update();

        return redirect('SuperAdmin/rescue')->with('warning','Data Berhasil Diedit');
    }

    function hapus(Rescue $rescue){

        $ambilDataRescue = $rescue->delete();
        return back()->with('danger', 'Data berhasil dihapus !');
    }
}