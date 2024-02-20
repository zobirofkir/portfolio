<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\contactController;
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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/about', function(){
    return view('abouts.about');
});

Route::get('/blog', [blogController::class, "blog"])->name("blog");

Route::get('/single-blog', function(){
    return view('singlsBlogs.single');
});

Route::get('/work', function() {
    return view('works.work');
});


Route::get('/contact', function() {
    return view('contacts.contact');
});

Route::post('/contact', [contactController::class, 'store'])->name('contact');

Route::get('/blog/create', [blogController::class, 'index']);
Route::post('/blog/create', [blogController::class, 'store'])->name('blog');

Route::post('/blog/update/{title}', [blogController::class, "update"]);

Route::get('/blog/update/{title}', [blogController::class, "edit"])->name('update');

// Route::get('/blog/update', function(){
//     return view('creats.update');
// });


Route::get('/blog/delete', function(){
    return view('creats.delete');
});

Route::get('/blog/delete/{id}', [blogController::class, "destroy"])->name("delete");