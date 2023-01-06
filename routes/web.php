<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Irpansyah",
        "jurusan" => "Teknik Komputer",
        "NPM" => "062140720450",
        "image" => "images.jpg",
        "title" => "About",
        "active" => "about"
    ]);
});

Route::get('/posts', [PostController::class, "index"]);

Route::get("/post/{post:slug}", [PostController::class, "show"]);

Route::get("/categories", function(){
    return view("categories", [
        "title" => "Post Category",
        "active" => "categories",
        "categories" => Category::all()
    ]);
});

Route::get("/login", [LoginController::class, "index"])->name("login")->middleware("guest");
Route::post("/login", [LoginController::class, "authenticate"]);
Route::post("/logout", [LoginController::class, "logout"]);


Route::get("/register", [RegisterController::class, "index"])->middleware("guest");
Route::post("/register", [RegisterController::class, "store"]);

Route::get("dashboard", [DashboardController::class, "index"])->middleware("auth");