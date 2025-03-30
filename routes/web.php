<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdministratorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ManageEmployeeController;

route::get('/contactus', [PagesController::class, 'ContactUs']);
route::get('/dashboard', [PagesController::class, 'Dashboard']);
route::get('/aboutus', [PagesController::class, 'AboutUs']);
Route::get('controll/{grade?}',[EmployeeController::class,'controll']);

Route::resource('employee',ManageEmployeeController::class);




Route::get('/', function () {
    return view('welcome');
});

Route::get('greet', function () {
    return 'Hello, World!';
})->name('greetroute');




// optional parameter
Route::get('greet/{name?}',[EmployeeController::class,'greet']);


//route group
route::group(['prefix'=>'administrator'], function(){

    Route::get('/dashboard', [AdministratorController::class, 'dash']);

    Route::get('/contact', [AdministratorController::class, 'contact']);

    Route::get('/profile', [AdministratorController::class, 'profile']);

});

// Route::resource('ManageEmployee',ManageEmployeeController::class);
