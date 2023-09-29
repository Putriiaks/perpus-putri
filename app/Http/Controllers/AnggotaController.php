<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::all();

        return view('pages.admin.anggota.index', [
            'title' => 'Anggota',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.anggots.create', [
            'title' => 'Tambah anggota',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'email' => 'required'

        ]);

        $input = $request->all();
  
        Anggota::create($input);
         return Redirect::route('anggota_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        return view('pages.admin.anggota.show', [
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
        return view('pages.admin.anggota.edit', [
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'email' => 'required'

        ]);

        $input = $request->all();

        $anggota->update($input);
        return Redirect::route('anggota_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        Anggota::destroy($anggota->id);

        return redirect('/anggota')->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
