<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardItemController;
use Illuminate\Support\Facades\Route;

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

Route::get('/feature', function () {
    return view('welcome.feature');
})->name('feature');

Route::get('/about', function () {
    return view('welcome.about');
})->name('about');

Route::get('/', function () {
    return view('welcome.home');
});

Route::view('create', 'crud.create');

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function() {

    Route::get('/dashboard', function () {
        return view('main');
    })->name('dashboard');

    Route::view('profile', 'profile')->name('profile');

    Route::put('/profile/update', [ProfileController::class, 'update'])->name('update');

    Route::get('/product', [ItemController::class, 'index'])->name('product');
    
    Route::get('/product/create', [DashboardItemController::class, 'create']);

    Route::put('/product/update', [DashboardItemController::class, 'update']);
    Route::post('/product/store', [DashboardItemController::class, 'store']);

    Route::get('/dashboard/product/{item:code}', [DashboardItemController::class, 'show']);
    Route::get('/product/edit/{item:code}', [DashboardItemController::class, 'edit']);
    Route::get('/product/delete/{item:code}', [DashboardItemController::class, 'destroy']);

    Route::get('/machine', [MachineController::class, 'index'])->name('machine');
    Route::get('/location', [LocationController::class, 'index'])->name('location');
    Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase');
    Route::get('/report', [SaleController::class, 'index'])->name('report');

    Route::resource('/dashboard/product', DashboardItemController::class);


});

