<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/blog', function () {
    return view('blog');
});
Route::get('portfolio', function () {
    return view('/portfolio');
});


Auth::routes();


Route::get('/', [PagesController::class, "home"])->name('home');
Route::get('/portfolio', [PagesController::class, "portfolio"])->name('portfolio');
Route::get('/portfolio/{id}', [PagesController::class, "sPortfolio"])->name('sportfolio');
Route::get('/blog', [PagesController::class, "blog"])->name('blog');
Route::get('/blog/{id}', [PagesController::class, "sBlog"])->name('sblog');

//админка
Route::group(["middleware" => ["auth"]], function (){
    Route::post('/blogs', [BlogsController::class, "store"])->name('store-blog');
    Route::post('/public-blog/{id}', [BlogsController::class, "publicBlog"])->name('public-blog');
    Route::post('/comment/store', [BlogsController::class,'storeComment'])->name('comment.add');
    Route::get('/blogs', [PagesController::class, "myBlogs"])->name('my-blogs');
    Route::get('/create', [PagesController::class, "createBlog"])->name('create-blog');


});



