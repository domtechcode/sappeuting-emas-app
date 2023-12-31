<?php

use App\Livewire\Auth\LoginIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\Kader\Components\SurveiKaderIndex;
use App\Livewire\Kota\Components\DashboardKotaIndex;
use App\Livewire\Kota\Components\DatabaseSurveiIndex;
use App\Livewire\Kader\Components\DashboardKaderIndex;
use App\Livewire\Kota\Components\UserManagementsIndex;
use App\Livewire\Kota\Components\DatabasePendudukIndex;
use App\Livewire\Kota\Components\DatabaseTabulasiIndex;
use App\Livewire\Kelurahan\Components\SurveiKelurahanIndex;
use App\Livewire\Kader\Components\DatabaseSurveiKrsKaderIndex;
use App\Livewire\Kecamatan\Components\DashboardKecamatanIndex;
use App\Livewire\Kelurahan\Components\DashboardKelurahanIndex;
use App\Livewire\Kader\Components\DatabaseSurveiP3keKaderIndex;

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
//     return view('welcome');
// });

Route::get('/', LoginIndex::class)->name('login');
Route::post('/logout', [LoginIndex::class, 'logout'])->name('logoutProcess');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin-kota', 'middleware' => ['role:admin-kota']], function () {
        Route::get('/dashboard', DashboardKotaIndex::class)->name('dashboardAdminKota');
        Route::get('/database-penduduk', DatabasePendudukIndex::class)->name('databasePenduduk');
        Route::get('/database-survei', DatabaseSurveiIndex::class)->name('databaseSurvei');
        Route::get('/user-managements', UserManagementsIndex::class)->name('userManagements');
    });

    Route::group(['prefix' => 'admin-kader', 'middleware' => ['role:admin-kader']], function () {
        Route::get('/dashboard', DashboardKaderIndex::class)->name('dashboardAdminKader');
        Route::get('/survei/{state}/{id}', SurveiKaderIndex::class)->name('surveiKader');
        Route::get('/database-survei-krs-kader', DatabaseSurveiKrsKaderIndex::class)->name('databaseSurveiKrsKader');
        Route::get('/database-survei-p3ke-kader', DatabaseSurveiP3keKaderIndex::class)->name('databaseSurveiP3keKader');
    });

    Route::group(['prefix' => 'admin-kelurahan', 'middleware' => ['role:admin-kelurahan']], function () {
        Route::get('/admin-kelurahan', DashboardKelurahanIndex::class)->name('dashboardAdminKelurahan');
        Route::get('/admin-kelurahan-survei', SurveiKelurahanIndex::class);
    });

    Route::group(['prefix' => 'admin-kecamatan', 'middleware' => ['role:admin-kecamatan']], function () {
        Route::get('/admin-kecamatan', DashboardKecamatanIndex::class)->name('dashboardAdminKecamatan');
    });
});
