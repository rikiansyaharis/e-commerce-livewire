<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Brand\BrandComponent;
use App\Http\Controllers\Auth\AuthController;


use App\Livewire\Admin\Product\ProductComponent;
use App\Livewire\Admin\Dashboard\DashboardComponent;
use App\Livewire\Admin\Product\CreateProductComponent;

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
    return view('home');
})->name('homepage');


Route::prefix('auth')->group(function() {
    Route::get('/login',[AuthController::class, 'login'])->name('auth.login');
    Route::get('/signin',[AuthController::class, 'getLogin'])->name('auth.getLogin');
    Route::get('/register',[AuthController::class, 'register'])->name('auth.register');
    Route::get('/signup',[AuthController::class, 'getRegister'])->name('auth.getRegister');
    Route::get('/logout',[AuthController::class, 'logout'])->name('auth.logout');
});

Route::prefix('apps')->middleware('auth.admin','auth')->group(function() {
    Route::get('/dashboard', DashboardComponent::class)->name('apps.dashboard');

    Route::prefix('brand')->group(function() {
        Route::get('/brands', BrandComponent::class)->name('brand.brands');
    });

    Route::prefix('product')->group(function() {
        Route::get('/product', ProductComponent::class)->name('product.products');
        Route::get('/create', CreateProductComponent::class)->name('product.addProducts');
    });



});
