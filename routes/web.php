<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GachaController;
use App\Http\Controllers\LoremController;
use App\Http\Controllers\PempekController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FrameworkController;
use App\Http\Controllers\NasiGorengController;
use App\Http\Controllers\PemrogramanController;
use App\Http\Controllers\SistemOperasiController;
use App\Http\Controllers\BlueArchiveCharacterController;

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
    return view('welcome');
});

// Route tanpa controller
Route::get('/tampilkan/nama/{nama?}', function ($nama = '') {
    return "Nama anda adalah : $nama";
})->where([
    "nama" => "[A-Za-z\s]+"
]);

Route::get('/tampilkan/npm/{npm?}', function ($npm = '') {
    return "NPM anda adalah : $npm";
})->where([
    "npm" => "[A-Z0-9]+"
]);

Route::get('/tampilkan/alamat/{alamat?}', function ($alamat = '') {
    return "Alamat anda adalah : $alamat";
})->where([
    "alamat" => "[A-Za-z0-9\s.,]+"
]);

Route::get('/tampilkan/biodata', function () {
    return view("biodata");
});

Route::get('/kalkulator/penjumlahan/{angka1?}/{angka2?}', function ($angka1 = 0, $angka2 = 0) {
    return "$angka1 + $angka2 = " . $angka1 + $angka2;
});

Route::get('/kalkulator/pengurangan/{angka1?}/{angka2?}', function ($angka1 = 0, $angka2 = 0) {
    return "$angka1 - $angka2 = " . $angka1 - $angka2;
});

Route::get('/kalkulator/pembagian/{angka1?}/{angka2?}', function ($angka1 = 0, $angka2 = 0) {
    return "$angka1 / $angka2 = " . $angka1 / $angka2;
});

Route::get('/kalkulator/perkalian/{angka1?}/{angka2?}', function ($angka1 = 0, $angka2 = 0) {
    return "$angka1 * $angka2 = " . $angka1 * $angka2;
});

Route::get('/kalkulator/mod/{angka1?}/{angka2?}', function ($angka1 = 0, $angka2 = 0) {
    return "$angka1 % $angka2 = " . $angka1 % $angka2;
});

Route::get('/gacha', function () {
    $gacha = [
        0 => "<script>alert(\"Anda Kalah\")</script>",
        1 => "<script>alert(\"Anda Menang\")</script>"
    ];

    return $gacha[rand(0, 1)];
});

Route::post('hasil', function() {
    return view('hasil-kalkulator');
});

// Route dengan menggunakan Controller

Route::get('/welcome', [WelcomeController::class, 'laravel']);

Route::get('/biodata', [BiodataController::class, 'bio']);

Route::get('/blue-archive', [BlueArchiveCharacterController::class, 'student']);

Route::get('/best-framework-php', [FrameworkController::class, 'bestFrameworkPHP']);

Route::get('/gacha/number', [GachaController::class, 'randomNumber']);

Route::get('/lorem', [LoremController::class, 'lorem']);

Route::get('/resep/nasi-goreng', [NasiGorengController::class, 'nasiGoreng']);

Route::get('/resep/pempek', [PempekController::class, 'pempek']);

Route::get('/pemrograman/terbaik', [PemrogramanController::class, 'best']);

Route::get('/sistem-operasi/terbaik', [SistemOperasiController::class, 'best']);