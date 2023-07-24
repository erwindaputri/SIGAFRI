<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class SPAdmin extends Controller
{
    
    public function index()
    {
        
        $data['list_admin'] = Admin::all();

        return view('SuperAdmin.admin.index', $data);
    }

    
    public function create()
    {
        

        return view('SuperAdmin.admin.create');
    }

    
    public function store(Request $request)
    {
        $admin = New Admin();
        $admin->nama = request('nama');
        $admin->email = request('email');
        $admin->username = request('username');
        $admin->password =  bcrypt(request('password'));
        $admin->handleUploadFoto();
        $admin->save();

        return redirect('SuperAdmin/admin')->with('success', 'Data berhasil disimpan !');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit(Admin $admin)
    {
        
        $data['admin'] = $admin;

        return view('SuperAdmin/admin.edit', $data);
    }

    
    public function update($admin)
    {
        $admin = Admin::find($admin);
        $admin->nama = request('nama');
        $admin->email = request('email');
        $admin->username = request('username');
        if(request('password')) $admin->password =   bcrypt(request('password'));
        $admin->handleUploadFoto();
        $admin->save();

        return redirect('SuperAdmin/admin')->with('success', 'Data berhasil diedit !');
    }

    
    public function destroy($admin)
    {
        Admin::destroy($admin);
        return back()->with('danger', 'Data berhasil dihapus !');
    }

    
}
