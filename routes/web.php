<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\projectController;
use App\Http\Middleware\AdminAuthMiddleware;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/', [blogController::class, 'recent']);

Route::get('/about', function(){
    return view('abouts.about');
});

Route::get('/blog', [blogController::class, "blog"])->name("blog");

Route::get('/single-blog', function(){
    return view('singlsBlogs.single');
});

Route::get('/work', [projectController::class, "index"])->name("work");

Route::get('/contact', function() {
    return view('contacts.contact');
});

Route::post('/contact', [contactController::class, 'store'])->name('contact');

Route::get('/login', [AdminController::class, 'create'])->name('login');
Route::post('/login', [AdminController::class, 'store']);

Route::middleware('admin.auth')->group(function () {
    Route::get('/blog/create', [BlogController::class, 'index'])->name("home.auth");
    Route::post('/blog/create', [BlogController::class, 'store'])->name('blog');
    Route::post('/blog/update/{title}', [BlogController::class, "update"]);
    Route::get('/blog/update/{title}', [BlogController::class, "edit"])->name('update');
    Route::get('/blog/delete', function(){
        return view('creats.delete');
    });
    Route::get('/blog/delete/{id}', [BlogController::class, "destroy"])->name("delete");
    Route::get("/project/create", [projectController::class, "index"])->name("project_index");

    Route::get("/project/create", [projectController::class, "create"])->name("project");
    Route::post("/project/create", [projectController::class, "store"])->name("project");

    Route::get("/project/update/{id}", [projectController::class, "edit"])->name("proj.update");
    Route::post("/project/update/{id}", [projectController::class, "update"])->name("proj.update");

    Route::get("/project/delete/{id}", [projectController::class, "destroy"])->name("destroyD");
});
