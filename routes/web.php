<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;



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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

// Admin
Route::get('/admin', function () {
    return view('admin.home-admin');
});


// Member
Route::get('/member', function () {
    return view('member.home-member');
});



Route::resource('/admin/pendaftaran', PendaftaranController::class);
Route::post('receive/{pendaftaran}', [PendaftaranController::class, 'receive'])->name('pendaftaran.receive');
Route::post('reject/{pendaftaran}', [PendaftaranController::class, 'reject'])->name('pendaftaran.reject');
// Route::get('/admin/pendaftaran/receive/{pendaftaran}', [PendaftaranController::class, 'receive'])->name('pendaftaran.receive');



Route::resource('/admin/member', MemberController::class);

Route::resource('/admin/pelatih', PelatihController::class);

Route::resource('/admin/absensi', AbsensiController::class);
Route::post('generate', [AbsensiController::class, 'generate'])->name('absensi.generate');


Route::resource('/admin/jadwal', JadwalController::class);

Route::resource('/admin/program', ProgramController::class);

Route::resource('/admin/event', EventController::class);

Route::resource('/admin/biaya', BiayaController::class);

Route::resource('/admin/prestasi', PrestasiController::class);

Route::resource('/admin/laporan', LaporanController::class);

// Member
Route::resource('/member/profil', ProfilController::class);
Route::get('/member/{id_member}', [MemberController::class, 'show'])->name('member.show');

//pendaftaran
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

// User
Route::prefix('/user')->group(function () {
    Route::get('/', function () {
        return view('user.home-user');
    });
});

Route::get('/login', [App\Http\Controllers\UserController::class, 'index'])->name('login')->middleware('guest');
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::post('/login', [App\Http\Controllers\UserController::class, 'authenticate']);
Route::group(["middleware" => ["guest"]], function () {
    Route::post("/login", [UserController::class, "authenticate"]);
});

Route::group(["middleware" => ["admin"]], function () {
    Route::get('/admin', function () {
        return view('admin.home-admin');
    });

    Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
});

Route::group(["middleware" => ["member"]], function () {
    Route::get('/member', function () {
        return view('member.home-member');
    });

    Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
});
