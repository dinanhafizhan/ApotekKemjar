<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/dashboard', function () {
    return view('/admin/DashboardAdmin');
})->middleware(['auth', 'verified','role:admin'])->name('dashboard');

Route::get('/admin/user', function () {
    return view('/admin/UserAdmin');
})->middleware(['auth', 'verified'])->name('admin.user');

Route::get('/admin/obat', function () {
    return view('/admin/ObatAdmin');
})->middleware(['auth', 'verified'])->name('admin.obat');

Route::get('/admin/transaksi', function () {
    return view('admin.DaftarTransaksi');
})->middleware(['auth', 'verified'])->name('admin.transaksi');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('admin',function( ){
    return '<h1>Hello Admin</h1>';
})->middleware(['auth', 'verified','role:admin']);

Route::get('user',function( ){
    return '<h1>Hello user</h1>';
})->middleware(['auth', 'verified','role:user']);



Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/obat', [AdminController::class, 'index'])->name('admin.ObatAdmin');
    Route::get('/obat/create', [AdminController::class, 'create'])->name('admin.ObatAdmin.create');
    Route::post('/obat', [AdminController::class, 'store'])->name('admin.ObatAdmin.store');
    Route::get('/obat/{id}/edit', [AdminController::class, 'edit'])->name('admin.ObatAdmin.edit');
    Route::put('/obat/{id}', [AdminController::class, 'update'])->name('admin.ObatAdmin.update');
    Route::delete('/obat/{id}', [AdminController::class, 'destroy'])->name('admin.ObatAdmin.destroy');
});


require __DIR__.'/auth.php';
