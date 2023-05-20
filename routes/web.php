<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardMitraController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterKegiatanController;
use App\Http\Controllers\SatuanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\SpjController;
use App\Http\Controllers\BASTController;
use App\Http\Controllers\SPKController;
use App\Http\Controllers\LampSPKController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "active" => "home"
    ]);
})->middleware('auth');

Route::get('/daftar_mitra', [MitraController::class, 'index'])->middleware('auth');

Route::get('/daftar_kegiatan', [KegiatanController::class, 'index_home'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardMitraController::class, 'index'])->middleware('admin');

Route::get('/dashboard/mitra/daftar', [DashboardMitraController::class, 'daftar_mitra'])->middleware('admin');
Route::get('/dashboard/mitra/tambah', [DashboardMitraController::class, 'tambah'])->middleware('admin');
Route::resource('/dashboard/mitra', DashboardMitraController::class)->middleware('admin');

Route::resource('/user', UserController::class)->middleware('super_admin');

Route::get('/dashboard/data_lain', [DashboardController::class, 'index'])->middleware('admin');
Route::get('/dashboard/bank/daftar', [BankController::class, 'index'])->middleware('admin');
Route::get('/dashboard/bank/tambah', [BankController::class, 'tambah'])->middleware('admin');
Route::get('/dashboard/bank/edit', [BankController::class, 'edit'])->middleware('admin');
Route::resource('/dashboard/bank', BankController::class)->middleware('admin');

Route::get('/dashboard/satuan/daftar', [SatuanController::class, 'index'])->middleware('admin');
Route::get('/dashboard/satuan/tambah', [SatuanController::class, 'tambah'])->middleware('admin');
Route::get('/dashboard/satuan/edit', [SatuanController::class, 'edit'])->middleware('admin');
Route::resource('/dashboard/satuan', SatuanController::class)->middleware('admin');

Route::get('/dashboard/kegiatan/daftar', [KegiatanController::class, 'index'])->middleware('admin');
Route::get('/dashboard/kegiatan/tambah', [KegiatanController::class, 'tambah'])->middleware('admin');
Route::get('/dashboard/kegiatan/edit', [KegiatanController::class, 'edit'])->middleware('admin');
Route::resource('/dashboard/kegiatan', KegiatanController::class)->middleware('admin');

Route::get('/dashboard/master_kegiatan/daftar', [MasterKegiatanController::class, 'index'])->middleware('admin');
Route::get('/dashboard/master_kegiatan/tambah', [MasterKegiatanController::class, 'tambah'])->middleware('admin');
Route::get('/dashboard/master_kegiatan/edit', [MasterKegiatanController::class, 'edit'])->middleware('admin');
Route::resource('/dashboard/master_kegiatan', MasterKegiatanController::class)->middleware('admin');
Route::get('selectMitra', [MasterKegiatanController::class, 'mitra'])->name('mitra.index');
Route::get('selectKegiatan', [MasterKegiatanController::class, 'kegiatan'])->name('kegiatan.index');

Route:: get('/dashboard/data_spk/spk', [SPKController::class, 'index'])->middleware('admin');

Route::get('/dashboard/laporan/spj', [SpjController::class, 'index'])->middleware('admin');
Route::get('/dashboard/print/print_spj', [PrintController::class, 'index'])->middleware('admin');
Route::get('/dashboard/laporan/bast', [BASTController::class, 'index'])->middleware('admin');
Route:: get('/dashboard/laporan/lamp_spk', [LampSPKController::class, 'index'])->middleware('admin');
Route:: get('/dashboard/print/print_spk', [PrintController::class, 'spk'])->middleware('admin');
Route:: get('/dashboard/print/print_bast', [PrintController::class, 'bast'])->middleware('admin');