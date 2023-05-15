<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminIndexController;
use App\Http\Controllers\Admin\AdminSocialController;
use App\Http\Controllers\Admin\BlogUpdateController;

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
    Route::get('/blog/list', [BlogUpdateController::class, 'BlogPage'])->name('bloglist');
    Route::get('/blog/list/add', [BlogUpdateController::class, 'BlogAddPage'])->name('blogadd');
    Route::post('/blog/list/add/post', [BlogUpdateController::class, 'BlogAdd'])->name('addpost');
    Route::get('/blog/list/edit/{id}', [BlogUpdateController::class, 'EditPage'])->name('editPage');
    Route::post('/blog/list/edit/post', [BlogUpdateController::class, 'EditPost'])->name('editPost');
    Route::get('/blog/list/delete/{id}', [BlogUpdateController::class, 'PostDelete'])->name('postdelete');
    Route::get('/blog/categories', [AdminCategoryController::class, 'index'])->name('categorylist');
    Route::get('/blog/categories/add', [AdminCategoryController::class, 'addPage'])->name('categoryAddPage');
    Route::post('/blog/categories/add/category', [AdminCategoryController::class, 'add'])->name('categoryAdd');
    Route::get('/blog/categories/edit/{id}', [AdminCategoryController::class, 'editPage'])->name('categoryEditPage');
    Route::post('/blog/categories/edit', [AdminCategoryController::class, 'edit'])->name('categoryEdit');
    Route::get('/blog/categories/delete/{id}', [AdminCategoryController::class, 'delete'])->name('categoryDelete');
    Route::post('/home-title', [AdminIndexController::class, 'HomeTitle'])->name('HomeTitle');
    Route::get('/about', [AdminAboutController::class, 'HomeAbout'])->name('homeAbout');
    Route::post('/about/update', [AdminAboutController::class, 'AboutUpdate'])->name('aboutUpdate');
    Route::get('/contact', [AdminContactController::class, 'Contact'])->name('contact');
    Route::post('/contact/update', [AdminContactController::class, 'ContactUpdate'])->name('contactUpdate');
    Route::get('/social', [AdminSocialController::class, 'index'])->name('social');
    Route::get('/social/add', [AdminSocialController::class, 'addPage'])->name('socialAddPage');
    Route::post('/social/add/item', [AdminSocialController::class, 'add'])->name('socialAdd');
    Route::get('/social/edit/{id}', [AdminSocialController::class, 'editPage'])->name('socialEditPage');
    Route::post('/social/edit', [AdminSocialController::class, 'edit'])->name('socialEdit');
    Route::get('/social/delete/{id}', [AdminSocialController::class, 'delete'])->name('socialDelete');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// require __DIR__.'/auth.php';
