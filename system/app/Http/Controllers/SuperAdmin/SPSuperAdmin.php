<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin;
use Illuminate\Http\Request;

class SPSuperAdmin extends Controller
{
    public function index()
    {
        
        $data['list_superadmin'] = SuperAdmin::all();

        return view('SuperAdmin.superadmin.index', $data);
    }

    
    public function create()
    {
        

        return view('SuperAdmin.superadmin.create', );
    }

    
    public function store(Request $request)
    {
        $superadmin = New SuperAdmin();
        $superadmin->nama = request('nama');
        $superadmin->email = request('email');
        $superadmin->username = request('username');
        $superadmin->password =  bcrypt(request('password'));
        $superadmin->handleUploadFoto();
        $superadmin->save();

        return redirect('SuperAdmin/superadmin')->with('success', 'Data berhasil disimpan !');
    }

   
    public function detail($superadmin)
    {
        $id = decrypt($superadmin);
        $data['list'] =  SuperAdmin ::findOrFail($id);
        return view('SuperAdmin/superadmin.detail',$data);
    }

    
    public function edit(SuperAdmin $superadmin)
    {
        
        $data['superadmin'] = $superadmin;

        return view('SuperAdmin/superadmin.edit', $data);
    }

    
    public function update($superadmin)
    {
        $superadmin = SuperAdmin::find($superadmin);
        $superadmin->nama = request('nama');
        $superadmin->email = request('email');
        $superadmin->username = request('username');
        if(request('password')) $superadmin->password =   bcrypt(request('password'));
        $superadmin->handleUploadFoto();
        $superadmin->save();

        return redirect('SuperAdmin/superadmin')->with('success', 'Data berhasil diedit !');
    }

    
    public function destroy($superadmin)
    {
        SuperAdmin::destroy($superadmin);
        return back()->with('danger', 'Data berhasil dihapus !');
    }
}
