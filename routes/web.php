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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//BUKU
Route::get('/buku', [BukuController::class, 'index'])->name('buku_index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku_create');
Route::post('/buku/store', [BukuController::class, 'store'])->name('buku_store');
Route::get('/buku/show', [BukuController::class, 'show'])->name('buku_show');


Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku_edit');
Route::get('/buku/show/{id}', [BukuController::class, 'show'])->name('buku_show');
Route::post('/buku/update/{buku}', [BukuController::class, 'update'])->name('buku_update');
Route::post('/buku/destroy/{buku}', [BukuController::class, 'destroy'])->name('buku_destroy');


//KATEGORI
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori_index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori_create');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori_store');


Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori_edit');
Route::post('/kategori/update/{kategori}', [KategoriController::class, 'update'])->name('kategori_update');
Route::post('/kategori/destroy/{kategori}', [KategoriController::class, 'destroy'])->name('kategori_destroy');

//PEMINJAMAN
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman_index');
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman_create');
Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjaman_store');
Route::get('/peminjaman/show', [PeminjamanController::class, 'show'])->name('peminjaman_show');

Route::get('/peminjaman/edit/{id}', [PeminjamanController::class, 'edit'])->name('peminjaman_edit');
Route::get('/peminjaman/show/{id}', [PeminjamanController::class, 'show'])->name('peminjaman_show');
Route::post('/peminjaman/update/{peminjaman}', [PeminjamanController::class, 'update'])->name('peminjaman_update');
Route::post('/peminjaman/destroy/{peminjaman}', [PeminjamanController::class, 'destroy'])->name('peminjaman_destroy');


//PENULIS
Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis_index');
Route::get('/penulis/create', [PenulisController::class, 'create'])->name('penulis_create');
Route::post('/penulis/store', [PenulisController::class, 'store'])->name('penulis_store');
Route::get('/penulis/show', [PenulisController::class, 'show'])->name('penulis_show');


Route::get('/penulis/edit/{id}', [PenulisController::class, 'edit'])->name('penulis_edit');
Route::get('/penulis/show/{id}', [PenulisController::class, 'show'])->name('penulis_show');
Route::post('/penulis/update/{penulis}', [PenulisController::class, 'update'])->name('penulis_update');
Route::post('/penulis/destroy/{penulis}', [PenulisController::class, 'destroy'])->name('penulis_destroy');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
});