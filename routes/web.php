<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\DashboardController;

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

Route::get('/', function () {
    return view('user.top');
})->name('top');

Route::get('/following', function () {
    return view('user.following');
})->name('following');

Route::get('/explore', function () {
    return view('user.explore');
})->name('explore');


Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/following', function () {
        return view('user.dashboard.following');
    })->name('dashboard.following');

    Route::get('/dashboard/favorite', function () {
        return view('user.dashboard.favorite');
    })->name('dashboard.favorite');

    Route::get('/new', [ArticleController::class, 'new'])->name('article.new');
    Route::post('/create', [ArticleController::class, 'create'])->name('article.create');

    Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
    Route::post('/update/{id}', [ArticleController::class, 'update'])->name('article.update');
});

Route::middleware('auth')->name('user.')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
