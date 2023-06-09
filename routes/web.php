<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AuthController::class, 'Logout'])->name('auth.logout');

Route::prefix('tool')->group(function(){
    Route::get('/view', [ToolController::class, 'ToolView'])->name('tool.view');
    Route::get('/add', [ToolController::class, 'ToolAdd'])->name('tool.add');
    Route::post('/store', [ToolController::class, 'ToolStore'])->name('tool.store');
    Route::get('/detail/{id}', [ToolController::class, 'ToolDetail'])->name('tool.detail');
    Route::get('/edit/{id}', [ToolController::class, 'ToolEdit'])->name('tool.edit');
    Route::post('/update/{id}', [ToolController::class, 'ToolUpdate'])->name('tool.update');
    Route::get('/delete/{id}', [ToolController::class, 'ToolDelete'])->name('tool.delete');
});

Route::prefix('category')->group(function(){
    Route::get('/view', [CategoryController::class, 'CategoryView'])->name('category.view');
    Route::get('/add', [CategoryController::class, 'CategoryAdd'])->name('category.add');
    Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');
    Route::post('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');
});

Route::prefix('transaction')->group(function(){
    Route::get('/view', [TransactionController::class, 'TransactionView'])->name('transaction.view');
    Route::get('/add', [TransactionController::class, 'TransactionAdd'])->name('transaction.add');
    Route::post('/store', [TransactionController::class, 'TransactionStore'])->name('transaction.store');
    Route::get('/edit/{id}', [TransactionController::class, 'TransactionEdit'])->name('transaction.edit');
    Route::post('/update/{id}', [TransactionController::class, 'TransactionUpdate'])->name('transaction.update');
    Route::get('/delete/{id}', [TransactionController::class, 'TransactionDelete'])->name('transaction.delete');
});

Route::get('/search',[SearchController::class, 'Search'])->name('search');
