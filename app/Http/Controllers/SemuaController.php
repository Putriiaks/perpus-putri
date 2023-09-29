<?php

namespace App\Http\Controllers;

use App\Models\Semua;
use App\Models\Role;
use Illuminate\Http\Request;

class SemuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $semua = Semua::with('role');

        return view('pages.admin.semua.index', [
            'title' => 'Semua',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pages.admin.semua.create', [
            'semua' => Semua::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'username' => 'required',
            'password' => 'required|min:5|max:255',
            // 'nama_admin' => 'required',
            // 'user_role' => 'required',
        ]);

         $input = $request->all();

        Semua::create($input);
        return Redirect::route('semua_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Semua $semua)
    {
        return view('pages.admin.semua.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semua $semua)
    {
        $role = Role::all();
       
        return view('pages.admin.semua.edit', [
        'role' => $role,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Semua $semua)
    {
        $request -> validate([
            'username' => 'required',
            'password' => 'required|min:5|max:255',
            // 'nama_admin' => 'required',
            // 'user_role' => 'required',
        ]);

         $input = $request->all();

        Semua::create($input);
        return Redirect::route('semua_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semua $semua)
    {
        Semua::destroy($semua->id);

        return redirect('/semua')->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
