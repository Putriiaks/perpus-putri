<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('buku.index', [
        'title' => 'Buku',
        'buku' => Buku::all(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('buku.create', [
        'title' => 'Tambah Buku',
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
            'id_penulis' => 'required',
            'tahun_terbit' => 'required',
            'id_penerbit' => 'required',
            'id_kategori' => 'required',
            'sinopsis' => 'required',
            'sampul' => 'required',
        ]);

        Buku::create($validateData);

        return redirect('/buku')->with('success', 'Berhasil menambahkan buku!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
         return view('buku.edit', [
        'title' => 'Edit',
        'buku' => $buku,
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $rules = [
            'id' => 'required',
            'nama' => 'required',
            'id_penulis' => 'required',
            'tahun_terbit' => 'required',
            'id_penerbit' => 'required',
            'id_kategori' => 'required',
            'sinopsis' => 'required',
            'sampul' => 'required',
        ];

        $validateData = $request->validate($rules);

        Buku::where('id', $buku->id)->update($validateData);

        return redirect('/buku')->with('success', 'Berhasil merubah data buku!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        Buku::destroy($buku->id);

        return redirect('/buku')->with('success', 'Berhasil menghapus data buku!');
    }
}
