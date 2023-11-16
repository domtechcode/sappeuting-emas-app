<?php

use App\Livewire\Auth\LoginIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\Kader\Components\SurveiKaderIndex;
use App\Livewire\Kota\Components\DatabaseKotaIndex;
use App\Livewire\Kota\Components\DashboardKotaIndex;
use App\Livewire\Kader\Components\DashboardKaderIndex;
use App\Livewire\Kota\Components\UserManagementsIndex;
use App\Livewire\Kelurahan\Components\SurveiKelurahanIndex;
use App\Livewire\Kecamatan\Components\DashboardKecamatanIndex;
use App\Livewire\Kelurahan\Components\DashboardKelurahanIndex;

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

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin-kota', 'middleware' => ['role:admin-kota']], function () {
        Route::get('/dashboard', DashboardKotaIndex::class)->name('dashboardAdminKota');
        Route::get('/admin-kota-database', DatabaseKotaIndex::class);
        Route::get('/admin-kota-user', UserManagementsIndex::class);
    });

    Route::group(['prefix' => 'admin-kader', 'middleware' => ['role:admin-kader']], function () {
        Route::get('/admin-kader', DashboardKaderIndex::class)->name('dashboardAdminKader');
        Route::get('/admin-kader-survei', SurveiKaderIndex::class)->name('surveiKader');
    });

    Route::group(['prefix' => 'admin-kelurahan', 'middleware' => ['role:admin-kelurahan']], function () {
        Route::get('/admin-kelurahan', DashboardKelurahanIndex::class)->name('dashboardAdminKelurahan');
        Route::get('/admin-kelurahan-survei', SurveiKelurahanIndex::class);
    });

    Route::group(['prefix' => 'admin-kecamatan', 'middleware' => ['role:admin-kecamatan']], function () {
        Route::get('/admin-kecamatan', DashboardKecamatanIndex::class)->name('dashboardAdminKecamatan');
    });
});
