<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel; 
use PHPExcel; 
use PHPExcel_IOFactory;


class ExportController extends Controller
{
    public function exportToExcel() 
    { 
        // Ambil data yang ingin Anda ekspor (misalnya dari database) 
        $data = Buku::all(); 
 
        // Buat instance PHPExcel 
        $excel = new PHPExcel(); 
 
        // Set judul pada sheet Excel 
        $excel->getActiveSheet()->setTitle('Data Export'); 
 
        // Isi data ke dalam sheet Excel 
        $excel->getActiveSheet()->fromArray($data, null, 'A1'); 
 
        // Buat objek Writer untuk menulis Excel ke file 
        $writer = PHPExcel_IOFactory::createWriter($excel, 'Excel5'); 
 
        // Set header HTTP untuk menginformasikan bahwa ini adalah file Excel 
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="exported-data.xls"'); 
        header('Cache-Control: max-age=0'); 
 
        // Tulis Excel ke output 
        $writer->save('php://excel'); 
    } 
}

