<?php

use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/example',function() {
    return "Hello mother father";
});

Route::get('/hello',function(){
    return "hello how are you doing";
});


Route::get('/user/{id}',function ($id){
return "This is user number $id so get it right";
});


Route::get('User/{x}/{y}',function($x,$y){
    $sum = $x / $y;
    return "The sum of this number is: {$sum}";
});

Route::get('book/{tittle?}',function($tittle = null){
    $books = ["asp.net","laravel","nodjs","java","csharp"];
    if ($tittle == null){
        return $books;
    } 
    $book = array_filter($books, fn($item)=>$item == $tittle);
    return $book;
});

// Route::get('posts/index',[PostController::class, 'index']);
// Route::get('posts/example1',[PostController::class,'example1']);
// Route::get('posts/example2/{id}',[PostController::class,'example2']);
// Route::get('posts/apple',[PostController::class,'apple']);


Route::prefix("posts")->group(function(){
    Route::get('/index',[PostController::class, 'index']);
    Route::get('/example1',[PostController::class,'example1']);
    Route::get('/example2/{id}',[PostController::class,'example2']);
    Route::get('/apple',[PostController::class,'apple']);

});