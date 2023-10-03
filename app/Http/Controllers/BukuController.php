<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Penulis;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use PDF;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.buku.index', [
            'title' => 'Buku',
            'buku' => Buku::all(),
        ]);
    }

    public function index_anggota()
    {
        return view('pages.admin.buku.index_anggota', [
            'title' => 'Buku',
            'bukus' => Buku::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.buku.create', [
            'title' => 'Tambah buku',
            'kategori' => Kategori::all(),
            'penerbit' => Penerbit::all(),
            'penulis' => Penulis::all(),

            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'id_penulis' => 'required',
            'tahun_terbit' => 'required',
            'id_penerbit' => 'required',
            'id_kategori' => 'required',
            'sinopsis' => 'required',
            'jumlah' => 'required',
            'sampul' => 'image|file',
        ]);

       $file = $request->file('sampul');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        Buku::create([
            'nama' => $request->nama,
            'tahun_terbit' => $request->tahun_terbit,
            'id_penulis' => $request->id_penulis,
            'id_penerbit' => $request->id_penerbit,
            'id_kategori' => $request->id_kategori,
            'sinopsis' => $request->sinopsis,
            'jumlah' => $request->jumlah,
            'sampul' => $path

        ]);
        return Redirect::route('buku_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Buku::findOrFail($id);

        return view('pages.admin.buku.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Buku::findOrFail($id);
        $kategoris = Kategori::all();
        $penerbits = Penerbit::all();
        $penulis = Penulis::all();

        

        return view('pages.admin.buku.edit', [
            'item' => $item,
            'kategoris' => $kategoris,
            'penerbits' => $penerbits,
            'penulis' => $penulis,

            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Buku $buku, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'id_penulis' => 'required',
            'tahun_terbit' => 'required',
            'id_penerbit' => 'required',
            'id_kategori' => 'required',
            'sinopsis' => 'required',
            'jumlah' => 'required',
            'sampul' => 'required',
        ]);

        $file = $request->file('sampul');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        $buku->update([
            'nama' => $request->nama,
            'tahun_terbit' => $request->tahun_terbit,
            'id_penulis' => $request->id_penulis,
            'id_penerbit' => $request->id_penerbit,
            'id_kategori' => $request->id_kategori,
            'sinopsis' => $request->sinopsis,
            'jumlah' => $request->jumlah,
            'sampul' => $path
        ]);

        return redirect()->route('buku_index')->with('toast_success', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        Buku::destroy($buku->id);

        return redirect('/buku')->with('toast_success', 'Data Berhasil Dihapus!');
    }

    public function generatePDF()
    {
        $buku = Buku::get();
  
        $data = [
            'buku' => $buku,
        ]; 
            
        $pdf = PDF::loadView('pages.admin.buku.myPDF', $data);
     
        return $pdf->stream();
    }

    public function excel()
    {

        // Buat objek Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Buat lembar kerja aktif
        $sheet = $spreadsheet->getActiveSheet();

        // Isi data contoh ke lembar kerja
        $sheet->setCellValue('A1', 'Nama Buku');
        $sheet->setCellValue('C1', 'Tahun terbit');
        $sheet->setCellValue('B1', 'Penulis');
        $sheet->setCellValue('D1', 'Penerbit');
        $sheet->setCellValue('E1', 'Kategori');
        $sheet->setCellValue('F1', 'Sinopsis');
        $sheet->setCellValue('G1', 'Jumlah');
        $sheet->setCellValue('H1', 'Sampul');

        $bukus = Buku::with('penulis')->get();
        $bukus = Buku::with('penerbit')->get();
        $bukus = Buku::with('kategori')->get();

        $row = 2;
       foreach ($bukus as $buku) {
        $sheet->setCellValue('A' . $row, $buku->nama);
        $sheet->setCellValue('B' . $row, $buku->tahun_terbit);
        $sheet->setCellValue('C' . $row, $buku->penulis->nama);
        $sheet->setCellValue('D' . $row, $buku->penerbit->nama);
        $sheet->setCellValue('E' . $row, $buku->kategori->nama);
        $sheet->setCellValue('F' . $row, $buku->sinopsis);
        $sheet->setCellValue('G' . $row, $buku->jumlah);

         // Ganti dengan path gambar penulis yang sesuai
        $drawing = new Drawing();
        $drawing->setName('Sampul');
        $drawing->setDescription('Sampul Buku');
        $drawing->setPath(public_path('storage/' . $buku->sampul));
        $drawing->setCoordinates('H' . $row);
        $drawing->setWidth(100); 
        $drawing->setHeight(100); 
        $drawing->setWorksheet($sheet);
        $row++;
    }

        // Buat objek writer Excel
        $writer = new Xlsx($spreadsheet);
        $filename = 'buku.xlsx';
        $writer->save($filename);

        return response()->download($filename)->deleteFileAfterSend(true);
    }
    

    public function search(Request $request) {
        if($request->has('search')) {
            $buku = Buku::where('nama','LIKE','%'.$request->search.'%')->get();
        }
        else {
            $buku = Buku::all();
        }
       return view('pages.admin.buku.index', [
            'buku' => $buku,
        ]);
    }

}