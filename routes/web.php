<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/trend', [ProductController::class, 'allTrend'])->name('product.allTrend');
Route::get('/trend/{category}', [ProductController::class, 'listTrend'])->name('product.listTrend');

Route::get('/outfit', [ProductController::class, 'allOutfit'])->name('product.allOutfit');
Route::get('/outfit/{category}', [ProductController::class, 'listOutfit'])->name('product.listOutfit');

/*
|--------------------------------------------------------------------------
| Static
|--------------------------------------------------------------------------
*/
Route::get('about-today', function () {
    return view('static.about-today');
})->name('about-today');

/*
|--------------------------------------------------------------------------
| User Auth
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('favorit');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('favorit', function () {
        return view('static.favorit');
    })->name('favorit');
});

require __DIR__ . '/auth.php';
