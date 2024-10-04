<?php

use App\Http\Controllers\ArticlesController;
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

Route::get('/', function () {
    return view('welcome');
})->name('Home');

Route::get('/about', function () {
    return view('about');
})->name('About');

Route::get('/our-courses', function () {
    return view('course');
})->name('Course');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('Testimonials');

Route::get('/quizes', function () {
    return view('quizes');
})->name('Quizes');

Route::get('/contact-us', function () {
    return view('contacts');
})->name('Contacts');

Route::get('/articles', [ArticlesController::class, 'index'])->name('Articles');
Route::get('/admin/create', [ArticlesController::class, 'create'])->name('admin.create');
Route::post('/admin', [ArticlesController::class, 'store'])->name('admin.store');
Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [ArticlesController::class, 'update'])->name('articles.update');
Route::delete('/articles/{article}', [ArticlesController::class, 'destroy'])->name('articles.delete');


/*Route::get('/articles', function () {
    return view('articles');
})->name('Articles');*/