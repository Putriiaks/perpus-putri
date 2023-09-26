<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Redirect;
use PDF;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.penerbit.index', [
            'title' => 'Penerbit',
            'penerbit' => Penerbit::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.penerbit.create', [
            'title' => 'Tambah penerbit',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'jumlah' => 'required',
        
            
        ]);

        Penerbit::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'jumlah' => $request->jumlah,
           

        ]);

        return Redirect::route('penerbit_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $data = Penerbit::findOrFail($id);

        return view('pages.admin.penerbit.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Penerbit::findOrFail($id);

         return view('pages.admin.penerbit.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Penerbit $penerbit, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'jumlah' => 'required',
           
           
        ]);

        $penerbit->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'jumlah' => $request->jumlah,
            
        ]);

        return redirect()->route('penerbit_index')->with('toast_success', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerbit $penerbit)
    {
        Penerbit::destroy($penerbit->id);

        return redirect('/penerbit')->with('toast_success', 'Data Berhasil Dihapus!');
    }

 public function generatePDF()
    {
        $penerbit = Penerbit::get();
  
        $data = [
            'penerbit' => $penerbit,
        ]; 
            
        $pdf = PDF::loadView('pages.admin.penerbit.myPDF', $data);
     
        return $pdf->stream();
    }

    public function excel()
    {

        // Buat objek Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Buat lembar kerja aktif
        $sheet = $spreadsheet->getActiveSheet();

        // Isi data contoh ke lembar kerja
        $sheet->setCellValue('A1', 'Nama Penerbit');
        $sheet->setCellValue('B1', 'Alamat');
        $sheet->setCellValue('C1', 'Telepon');
        $sheet->setCellValue('D1', 'Email');
     
       $penerbit = Penerbit::all();

        $row = 2;
       foreach ($penerbit as $p) {
        $sheet->setCellValue('A' . $row, $p->nama);
        $sheet->setCellValue('B' . $row, $p->alamat);
        $sheet->setCellValue('C' . $row, $p->telepon);
        $sheet->setCellValue('D' . $row, $p->email);
      

        $row++;
    }

        // Buat objek writer Excel
        $writer = new Xlsx($spreadsheet);
        $filename = 'penerbit.xlsx';
        $writer->save($filename);

        return response()->download($filename)->deleteFileAfterSend(true);
    }

    public function search(Request $request) {
        if($request->has('search')) {
            $penerbit = Penerbit::where('email','LIKE','%'.$request->search.'%')->get();
        }
        else {
            $penerbit = Penerbit::all();
        }
       return view('pages.admin.penerbit.index', [
            'penerbit' => $penerbit,
        ]);
    }
}