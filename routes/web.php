<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController as AdminPageController;

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

Route::get('/', [AdminPageController::class, 'index'])->name('admin.index');
Route::get('/{id}', [AdminPageController::class, 'show'])->name('admin.show');