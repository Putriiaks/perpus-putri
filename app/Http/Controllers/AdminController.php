<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = User::with('role');

        return view('pages.admin.admin.index', [
            'title' => 'Admin',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pages.admin.admin.create', [
            'role' => Role::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request -> validate([
            'username' => 'required',
            'password' => 'required|min:5|max:255',
            // 'nama_admin' => 'required',
            // 'user_role' => 'required',

        ]);
         $validatedData['password'] = Hash::make($validatedData['password']);

         User::create($validatedData);

         $input = $request->all();

        User::create($input);
        return Redirect::route('admin_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        return view('pages.admin.admin.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
         
        $role = Role::all();
       
        return view('pages.admin.admin.edit', [
        'role' => $role,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            // 'nama_admin' => 'required',
            // 'user_role' => 'required',

        ]);

         $input = $request->all();
  
        $admin->update($input);
        return redirect()->route('admin_index')->with('toast_success', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
         Admin::destroy($admin->id);

        return redirect('/admin')->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
