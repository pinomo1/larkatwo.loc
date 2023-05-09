<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\AdminIndexController;


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


/*  Админка */
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::get('/', [IndexController::class, 'Index'])->name('Index');
    Route::get('/about', [AboutController::class, 'AboutIndex'])->name('About');
    Route::get('/post', [PostController::class, 'PostIndex'])->name('Post');
    Route::get('/post/search', [PostController::class, 'PostSearch'])->name('PostSearch');
    Route::get('/post/category/{id}', [PostController::class, 'PostCategory'])->name('Category');
    Route::get('/post/user/{id}', [PostController::class, 'PostUser'])->name('User');
    Route::get('/post/more/{id}', [PostController::class, 'ReadMorePost'])->name('ReadMore');
    Route::get('/contact', [ContactController::class, 'ContactIndex'])->name('Contact');
    Route::post('/contact/email', [ContactController::class, 'EmailGet'])->name('emailget');
});

Route::middleware('auth')->prefix('adminka')->group(function () {
    Route::get('/', [AdminIndexController::class, 'AdminIndexPage'])->name('adminka');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// require __DIR__.'/auth.php';
