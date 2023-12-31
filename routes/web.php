<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AnggotaController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//BUKU
Route::get('/buku', [BukuController::class, 'index'])->name('buku_index');
Route::get('/buku_anggota', [BukuController::class, 'index_anggota'])->name('buku_index_anggota');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku_create');
Route::post('/buku/store', [BukuController::class, 'store'])->name('buku_store');
Route::get('/buku/show', [BukuController::class, 'show'])->name('buku_show');
Route::get('/buku/search', [BukuController::class,'search'])->name('buku_search');

Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku_edit');
Route::get('/buku/show/{id}', [BukuController::class, 'show'])->name('buku_show');
Route::post('/buku/update/{buku}', [BukuController::class, 'update'])->name('buku_update');
Route::post('/buku/destroy/{buku}', [BukuController::class, 'destroy'])->name('buku_destroy');
Route::get('generate-pdf', [BukuController::class, 'generatePDF'])->name('generate-pdf');
Route::get('export-excel', [BukuController::class, 'excel'])->name('export-excel');


//KATEGORI
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori_index');
Route::get('/kategori_anggota', [KategoriController::class, 'index_anggota'])->name('kategori_index_anggota');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori_create');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori_store');
Route::get('/kategori/search', [KategoriController::class,'search'])->name('kategori_search');

Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori_edit');
Route::post('/kategori/update/{kategori}', [KategoriController::class, 'update'])->name('kategori_update');
Route::post('/kategori/destroy/{kategori}', [KategoriController::class, 'destroy'])->name('kategori_destroy');
Route::get('kategori-pdf', [KategoriController::class, 'generatePDF'])->name('kategori-pdf');
Route::get('kategori-excel', [KategoriController::class, 'excel'])->name('kategori-excel');



//PEMINJAMAN
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman_index');
Route::get('/peminjaman_anggota', [PeminjamanController::class, 'index_anggota'])->name('peminjaman_index_anggota');
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman_create');
Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjaman_store');
Route::get('/peminjaman/show', [PeminjamanController::class, 'show'])->name('peminjaman_show');
Route::get('/peminjaman/search', [PeminjamanController::class,'search'])->name('peminjaman_search');

Route::get('/peminjaman/edit/{id}', [PeminjamanController::class, 'edit'])->name('peminjaman_edit');
Route::get('/peminjaman/show/{id}', [PeminjamanController::class, 'show'])->name('peminjaman_show');
Route::post('/peminjaman/update/{peminjaman}', [PeminjamanController::class, 'update'])->name('peminjaman_update');
Route::post('/peminjaman/destroy/{peminjaman}', [PeminjamanController::class, 'destroy'])->name('peminjaman_destroy');
Route::get('peminjaman-pdf', [PeminjamanController::class, 'generatePDF'])->name('peminjaman-pdf');
Route::get('peminjaman-excel', [PeminjamanController::class, 'excel'])->name('peminjaman-excel');



//PENULIS
Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis_index');
Route::get('/penulis_anggota', [PenulisController::class, 'index_anggota'])->name('penulis_index_anggota');
Route::get('/penulis/create', [PenulisController::class, 'create'])->name('penulis_create');
Route::post('/penulis/store', [PenulisController::class, 'store'])->name('penulis_store');
Route::get('/penulis/show', [PenulisController::class, 'show'])->name('penulis_show');
Route::get('/penulis/search', [PenulisController::class,'search'])->name('penulis_search');

Route::get('/penulis/edit/{id}', [PenulisController::class, 'edit'])->name('penulis_edit');
Route::get('/penulis/show/{id}', [PenulisController::class, 'show'])->name('penulis_show');
Route::post('/penulis/update/{penulis}', [PenulisController::class, 'update'])->name('penulis_update');
Route::post('/penulis/destroy/{penulis}', [PenulisController::class, 'destroy'])->name('penulis_destroy');
Route::get('penulis-pdf', [PenulisController::class, 'generatePDF'])->name('penulis-pdf');
Route::get('penulis-excel', [PenulisController::class, 'excel'])->name('penulis-excel');



//PENERBIT
Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit_index');
Route::get('/penerbit_anggota', [PenerbitController::class, 'index_anggota'])->name('penerbit_index_anggota');
Route::get('/penerbit/create', [PenerbitController::class, 'create'])->name('penerbit_create');
Route::post('/penerbit/store', [PenerbitController::class, 'store'])->name('penerbit_store');
Route::get('/penerbit/show', [PenerbitController::class, 'show'])->name('penerbit_show');
Route::get('/penerbit/search', [PenerbitController::class,'search'])->name('penerbit_search');

Route::get('/penerbit/edit/{id}', [PenerbitController::class, 'edit'])->name('penerbit_edit');
Route::get('/penerbit/show/{id}', [PenerbitController::class, 'show'])->name('penerbit_show');
Route::post('/penerbit/update/{penerbit}', [PenerbitController::class, 'update'])->name('penerbit_update');
Route::post('/penerbit/destroy/{penerbit}', [PenerbitController::class, 'destroy'])->name('penerbit_destroy');
Route::get('penerbit-pdf', [PenerbitController::class, 'generatePDF'])->name('penerbit-pdf');
Route::get('penerbit-excel', [PenerbitController::class, 'excel'])->name('penerbit-excel');

//ADMIN
Route::get('/admin', [AdminController::class, 'index'])->name('admin_index');

//ROLE
Route::get('/role', [RoleController::class, 'index'])->name('role_index');

//ANGGOTA
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota_index');
Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota_create');
Route::post('/anggota/store', [AnggotaController::class, 'store'])->name('anggota_store');
Route::get('/anggota/show', [AnggotaController::class, 'show'])->name('anggota_show');

Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit'])->name('anggota_edit');
Route::get('/anggota/show/{id}', [AnggotaController::class, 'show'])->name('anggota_show');
Route::post('/anggota/update/{anggota}', [AnggotaController::class, 'update'])->name('anggota_update');
Route::post('/anggota/destroy/{anggota}', [AnggotaController::class, 'destroy'])->name('anggota_destroy');

//SEMUA
Route::get('/semua', [SemuaController::class, 'index'])->name('semua_index');
Route::get('/semua/create', [SemuaController::class, 'create'])->name('semua_create');
Route::post('/semua/store', [SemuaController::class, 'store'])->name('semua_store');
Route::get('/semua/show', [SemuaController::class, 'show'])->name('semua_show');

Route::get('/semua/edit/{id}', [SemuaController::class, 'edit'])->name('semua_edit');
Route::get('/semua/show/{id}', [SemuaController::class, 'show'])->name('semua_show');
Route::post('/semua/update/{semua}', [SemuaController::class, 'update'])->name('semua_update');
Route::post('/semua/destroy/{semua}', [SemuaController::class, 'destroy'])->name('semua_destroy');

// Grup admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Rute-rute admin
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
    // ...
});

// Grup anggota
Route::middleware(['auth', 'role:anggota'])->group(function () {
    // Rute-rute anggota
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
    // ...
});

Route::get('/semua_index', [MenuController::class, 'semua_index'])->name('semua_index');
Route::get('/anggota_index', [MenuController::class, 'anggota_index'])->name('anggota_index');
Route::get('/admin_index', [MenuController::class, 'admin_index'])->name('admin_index');



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
});