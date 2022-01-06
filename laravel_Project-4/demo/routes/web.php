<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;

// use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
    
    // FluentString
    // $string = "we are learning laravel- 8.0";
    // $ucFirst = Str::ucFirst($string);
    // echo $ucFirst."<br>";
    // $replacefirst = Str::replacefirst("we","They",$string);
    // echo $replacefirst."<br>";
    // $camel = Str::camel($string);
    // echo $camel."<br>";

    // $fluentString = Str::of($string)
    //                      ->ucFirst($string)
    //                      ->replacefirst("we","They",$string)
    //                      ->camel($string);
    // echo $fluentString."<br>";


});


// Route::get('/product', [DemoController::class,'index'])->name('product.index');
// Route::get('/user', [UserController::class,'index'])->name('user.index');

// Route::view('/about','about');
// Route::view('/contact','contact');
// Route::view('/service','service');

Route::get('/posts', [DemoController::class,'showAllPost']);
Route::get('/posts/{id}', [DemoController::class,'showSinglePost']);
Route::get('/add-post', [DemoController::class,'addPost']);
Route::get('/edit-post/{id}', [DemoController::class,'editPost']);
Route::get('/delete-post/{id}', [DemoController::class,'deletePost']);

//ROUTE FOR A Form
Route::get('/form-create', [UserController::class,'formCreate']);
Route::post('/form-submit', [UserController::class,'formSubmit']);

//For Session
Route::get('/session/get', [SessionController::class,'getsessiondata']);
Route::get('/session/store', [SessionController::class,'storesessiondata']);
Route::get('/session/destroy', [SessionController::class,'destroysessiondata']);