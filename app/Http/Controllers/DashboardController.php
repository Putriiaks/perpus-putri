<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penulis;
use App\Models\Penerbit;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query =  Buku::query();
        $buku =  $query->count();

        $query =  Penulis::query();
        $penulis =  $query->count();

        $query =  Penerbit::query();
        $penerbit =  $query->count();
 
        $query =  Kategori::query();
        $kategori =  $query->count();

        return view('pages.admin.dashboard.dashboard', [
            'title' => 'Dashboard',
            'buku' => $buku,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'kategori' => $kategori,
        ]);

    }
}