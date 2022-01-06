<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'account'],function(){
 
    Route::get('/profile', function(){
        return "Profile";
    });
    
    Route::get('/login', function(){
        return "Login";
    });

    Route::get('/logout', function(){
        return "Logout";
    });

    Route::get('/signup', function(){
        return "Signup";
    });
});
