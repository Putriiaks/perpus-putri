<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kategori.index', [
            'title' => 'Kategori',
            'kategori' => Kategori::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create', [
            'title' => 'Tambah kategori',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'nama' => 'required',
        ]);

        kategori::create($validateData);

        return redirect('/kategori')->with('success', 'Berhasil menambahkan kategori!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', [
            'title' => 'Edit',
            'kategori' => $kategori,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $rules = [
            'nama' => 'required',
        ];

        $validateData = $request->validate($rules);

        Kategori::where('id', $kategori->id)->update($validateData);

        return redirect('/kategori')->with('success', 'Berhasil merubah data kategori!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);

        return redirect('/kategori')->with('success', 'Berhasil menghapus data kategori!');
    }
}