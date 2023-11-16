<?php

use App\Livewire\LoginIndex;
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

Route::get('/', LoginIndex::class)->name('loginIndex');

Route::get('/admin-kader', DashboardKaderIndex::class)->name('dashboardAdminKader');
Route::get('/admin-kader-survei', SurveiKaderIndex::class)->name('surveiKader');

Route::get('/admin-kecamatan', DashboardKecamatanIndex::class);

Route::get('/admin-kelurahan', DashboardKelurahanIndex::class);
Route::get('/admin-kelurahan-survei', SurveiKelurahanIndex::class);

Route::get('/admin-kota', DashboardKotaIndex::class);
Route::get('/admin-kota-database', DatabaseKotaIndex::class);
Route::get('/admin-kota-user', UserManagementsIndex::class);
