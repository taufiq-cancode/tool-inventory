<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ToolController;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('tool')->group(function(){
    Route::get('/view', [ToolController::class, 'ToolView'])->name('tool.view');
    Route::get('/add', [ToolController::class, 'ToolAdd'])->name('tool.add');
    Route::post('/store', [ToolController::class, 'ToolStore'])->name('tool.store');
    Route::get('/edit/{id}', [ToolController::class, 'ToolEdit'])->name('tool.edit');
    Route::post('/update/{id}', [ToolController::class, 'ToolUpdate'])->name('tool.update');
    Route::get('/delete/{id}', [ToolController::class, 'ToolDelete'])->name('tool.delete');
});
