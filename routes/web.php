<?php
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\KepalagudangController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [AuthController::class, 'login']);

//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});

Route::group(['middleware' => ['auth', 'checkrole:1,2,3']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});

Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/administrator', [DashboardController::class, 'index']);
});

Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/operator', [OperatorController::class, 'index']);

});

Route::group(['middleware' => ['auth', 'checkrole:3']], function() {
    Route::get('/kepalagudang', [KepalagudangController::class, 'index']);

});

Route::get('/beranda', [AdministratorController::class, 'index']);

Route::get('/petugas', [PetugasController::class, 'index']);
Route::post('/storepetugas', [PetugasController::class, 'store']);
Route::get('/createpetugas', [PetugasController::class, 'create']);
Route::get('/editpetugas{id}', [PetugasController::class, 'edit']);
Route::post('/updatepetugas', [PetugasController::class, 'update']);
Route::get('/hapuspetugas{id}', [PetugasController::class, 'destroy']);

Route::get('/inventaris', [InventarisController::class, 'index']);
Route::post('/storeinventaris', [InventarisController::class, 'store']);
Route::get('/buat', [InventarisController::class, 'buat']);

Route::get('/jenis', [JenisController::class, 'index']);
Route::post('/storejenis', [JenisController::class, 'store']);
Route::get('/createjenis', [JenisController::class, 'create']);
Route::get('/editjenis{id}', [JenisController::class, 'edit']);
Route::post('/updatejenis', [JenisController::class, 'update']);
Route::get('/hapusjenis{id}', [JenisController::class, 'destroy']);

Route::get('/ruangs', [RuangController::class, 'index']);
Route::post('/storeruang', [RuangController::class, 'store']);
Route::get('/createruang', [RuangController::class, 'create']);
Route::get('/editruang{id}', [RuangController::class, 'edit']);
Route::post('/update', [RuangController::class, 'update']);
Route::get('/hapusruang{id}', [RuangController::class, 'destroy']);

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('/peminjaman/validate', [PeminjamanController::class, 'validatePeminjaman'])->name('peminjaman.validate');
Route::get('/peminjaman/pengembalian', [PeminjamanController::class, 'pengembalian'])->name('peminjaman.pengembalian');
Route::get('/peminjaman/return/{id}', [PeminjamanController::class, 'returnPeminjaman'])->name('peminjaman.return');
Route::post('/peminjaman/{id_peminjaman}/validasi', [PeminjamanController::class, 'validatepeminjaman'])->name('peminjaman.validatepeminjaman');
Route::get('/pengembalian', [PeminjamanController::class,'pengembalian']);
Route::post('/peminjaman/{id_peminjaman}/pengembalianadmin', [PeminjamanController::class, 'pengembalianadmin'])->name('peminjaman.pengembalianadmin');

Route::get('/laporan', [LaporanController::class,'laporan']);
Route::get('/datalaporan', [LaporanController::class,'datalaporan']);
Route::get('/peminjaman/pdfadmin', [LaporanController::class,'generatePdfadmin']);

Route::get('/anggota', [AnggotaController::class, 'index']);
Route::post('/storeanggota', [AnggotaController::class, 'store']);
Route::get('/createanggota', [AnggotaController::class, 'create']);
Route::get('/editanggota{id}', [AnggotaController::class, 'edit']);
Route::post('/updateanggota', [AnggotaController::class, 'update']);
Route::get('/hapusanggota{id}', [AnggotaController::class, 'destroy']);
