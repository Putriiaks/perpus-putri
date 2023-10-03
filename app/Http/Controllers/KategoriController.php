<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Redirect;
use PDF;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.kategori.index', [
            'title' => 'Kategori',
            'kategori' => Kategori::all(),
        ]);
    }

    public function index_anggota()
    {
        return view('pages.admin.kategori.index_anggota', [
            'title' => 'Kategori',
            'kategoris' => Kategori::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.kategori.create', [
            'title' => 'Tambah kategori',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            
        ]);

        Kategori::create([
            'nama' => $request->nama,
           

        ]);

        return Redirect::route('kategori_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
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
    public function edit($id)
    {
        $item = Kategori::findOrFail($id);

         return view('pages.admin.kategori.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Kategori $kategori, Request $request)
    {
        $request->validate([
            'nama' => 'required',
           
        ]);

        $kategori->update([
            'nama' => $request->nama,
            

            
        ]);

        return redirect()->route('kategori_index')->with('toast_success', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);

        return redirect('/kategori')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function generatePDF()
    {
        $kategori = Kategori::get();
  
        $data = [
            'kategori' => $kategori,
        ]; 
            
        $pdf = PDF::loadView('pages.admin.kategori.myPDF', $data);
     
        return $pdf->stream();
    }

    public function excel()
    {

        // Buat objek Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Buat lembar kerja aktif
        $sheet = $spreadsheet->getActiveSheet();

        // Isi data contoh ke lembar kerja
        $sheet->setCellValue('A1', 'Nama Kategori');
       
       $kategori = Kategori::all();

        $row = 2;
       foreach ($kategori as $k) {
        $sheet->setCellValue('A' . $row, $k->nama);
        $row++;
    }

        // Buat objek writer Excel
        $writer = new Xlsx($spreadsheet);
        $filename = 'kategori.xlsx';
        $writer->save($filename);

        return response()->download($filename)->deleteFileAfterSend(true);
    }

    public function search(Request $request) {
        if($request->has('search')) {
            $kategori = Kategori::where('nama','LIKE','%'.$request->search.'%')->get();
        }
        else {
            $kategori = Kategori::all();
        }
       return view('pages.admin.kategori.index', [
            'kategori' => $kategori,
        ]);
    }
}