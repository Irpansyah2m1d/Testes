<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
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
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Irpansyah",
        "jurusan" => "Teknik Komputer",
        "NPM" => "062140720450",
        "image" => "images.jpg",
        "title" => "About"
    ]);
});

Route::get('/blog', [PostController::class, "index"]);

Route::get("/post/{post:slug}", [PostController::class, "show"]);

Route::get("/categories", function(){
    return view("categories", [
        "title" => "Post Category",
        "categories" => Category::all()
    ]);
});

Route::get("/categories/{category:slug}", function(Category $category){
    return view("category", [
        "title" => $category->name,
        "posts" => $category->posts,
        "category" => $category->name
    ]);
});