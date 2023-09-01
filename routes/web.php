<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;


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

Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku_edit');
Route::post('/buku/update/{buku}', [BukuController::class, 'update'])->name('buku_update');
Route::post('/buku/destroy/{buku}', [BukuController::class, 'destroy'])->name('buku_destroy');


//KATEGORI
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori_index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori_create');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori_store');

Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori_edit');
Route::post('/kategori/update/{kategori}', [KategoriController::class, 'update'])->name('kategori_update');
Route::post('/kategori/destroy/{kategori}', [KategoriController::class, 'destroy'])->name('kategori_destroy');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
});