<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YummyController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix("YummyPage")->controller(YummyController::class)->group(function(){
        Route::get('/index' , 'index')->name("index");
        Route::get('/about' , 'about')->name("about");
        Route::get('/menu' , 'menu')->name("menu");
        Route::get('/event' , 'event')->name("event");
        Route::get('/chefs' , 'chefs')->name("chefs");
        Route::get('/gallery' , 'gallery')->name("gallery");
        Route::get('/contact' , 'contact')->name("contact");
        Route::get('/imagepage' , 'imagepage')->name("imagepage");
        Route::post('/contact' , 'Postcontact')->name("Postcontact");
        Route::get('/viewContact' , 'viewContact')->name("viewContact");

    });

