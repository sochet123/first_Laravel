<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Category;
use App\Http\Controllers\Product;
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

// Route::get('/', function () {
//     //return view('welcome');
// });

// Route::get('/hello', function () {
//     return "<h1>Hello BBU! </h1>";
// });

// Route::match(["GET","POST"],"match",function(){
//     return "<h1>This is route match for multiple route and parameters</h1>";
// });

// Route::get('/student/{id}', function ($id) {
//     return "Student infor for ID: ".$id;
// }) ->where('id','[0-9]+');

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/product', function () {
//     return view('product');
// });
// Route::get('/category', function () {
//     return view('category');
// });

Route::get('/home',[HomeController::class,'index']);
Route::get('/category',[Category::class,'category']);
Route::get('/product',[Product::class,'product']);