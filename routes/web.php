<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\POSController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;


Route::get('/', function () {
    return view('welcome');
});

// Praktikum 4
Route::get('/level', [LevelController::class, 'index']);
// praktikum 5
Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah']);



Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');

// Manage User
// Route::get('/user/create', [UserController::class, 'create'])->name('/user/create');
// Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('/user/edit');
// Route::get('/user', [UserController :: class, 'index'])->name('user.index');
// Route::post('/user', [UserController :: class, 'store']);
// Route::put('/user/{id}', [UserController :: class, 'edit_simpan'])->name('/user/edit_simpan');
// Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('/user/delete');

// Manage Level
Route::get('/level', [LevelController::class, 'index'])->name('level.index');
Route::get('/level/create', [LevelController::class, 'create'])->name('/level/create');
Route::post('/level', [LevelController::class, 'store']);
Route::get('/level/edit/{id}', [LevelController::class, 'edit'])->name('/level/edit');
Route::put('/level/{id}', [LevelController::class, 'edit_simpan'])->name('/level/edit_simpan');
Route::get('/level/delete/{id}', [LevelController::class, 'delete'])->name('/level/delete');

Route::resource('m_user', POSController::class );

// Manage Level
// Route::get('/level', [LevelController::class, 'index'])->name('level.index');
// Route::get('/level/create', [LevelController::class, 'create'])->name('level.create');
// Route::post('/level', [LevelController::class, 'store']);
// Route::get('/level/edit/{id}', [LevelController::class, 'edit'])->name('level.edit');
// Route::put('/level/edit_simpan/{id}', [LevelController::class, 'edit_simpan'])->name('level.edit_simpan');
// Route::get('/level/delete/{id}', [LevelController::class, 'delete'])->name('level.delete');

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});