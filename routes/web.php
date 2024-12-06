<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminWebController;
use App\Http\Controllers\HomeWebController;
use App\Http\Controllers\KajianWebController;
use App\Http\Controllers\TiketWebController;
use App\Http\Controllers\UserWebController;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\UserController;

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
Route::get('/login', [AdminWebController::class, 'showLogin'])->name('login');
Route::post('/login', [AdminWebController::class, 'login']);

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/', [HomeWebController::class, 'index'])->name('dashboard');
});

Route::post('/logout', function () {
    Auth::guard('admin')->logout();
    return redirect()->route('login');
})->name('logout');


Route::get('/admin/{id}', [AdminWebController::class, 'show']);

use App\Http\Controllers\UserController;

Route::get('/datapengguna', [UserWebController::class, 'showDataPengguna'])->name('datapengguna');
Route::get('/datakajian', [KajianWebController::class, 'index'])->name('datakajian');
Route::get('/datatiket', [TiketWebController::class, 'index'])->name('datatiket');


