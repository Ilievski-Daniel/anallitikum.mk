<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
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
});
// Route::get('/test', function () {
//     return view('test');
// });
Route::get('blog', BlogController::class . '@index')->name('blog.index');
Route::get('/blog/single/{id}',BlogController::class . '@show')->name('blog.single');

Route::get('admin/category', CategoryController::class . '@index')->name('category');
Route::GET('admin/category/delete/{id}', CategoryController::class . '@destroy')->name('category.delete');
Route::POST('admin/category/create', CategoryController::class . '@store')->name('category.create');




Route::get('admin/blog', PostController::class . '@index')->name('admin');
Route::get('admin/create/post', PostController::class . '@create')->name('post.create');
Route::post('admin/store/post', PostController::class . '@store')->name('post.store');
Route::get('admin/show/post/{id}', PostController::class . '@show')->name('post.show');
Route::get('admin/edit/post/{id}', PostController::class . '@edit')->name('post.edit');
Route::post('admin/update/post/{id}', PostController::class . '@update')->name('post.update');

Route::get('admin/delete/post/{id}', PostController::class . '@destroy')->name('post.delete');

// navtabs
Route::get('forum', BlogController::class. '@forum')->name('blog.forum');
Route::get('kultura', BlogController::class. '@kultura')->name('blog.kultura');
Route::get('intervju', BlogController::class. '@intervju')->name('blog.intervju');
Route::get('filmovi', BlogController::class. '@filmovi')->name('blog.filmovi');
Route::get('sport', BlogController::class. '@sport')->name('blog.sport');
Route::get('donaci', BlogController::class. '@donaci')->name('blog.donaci');
Route::get('citati', BlogController::class. '@citati')->name('blog.citati');
Route::get('kontakt', BlogController::class. '@kontakt')->name('blog.kontakt');
Route::get('test', BlogController::class. '@test')->name('blog.test');







