<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\quizController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\studentController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix("/students")->group(function(){
    Route::get("/" , [studentController::class , "index"])->name("students.index");
    Route::post("/" , [studentController::class , "store"]);
    Route::get("/{id}/delete" , [studentController::class , "destroy"]);
    Route::get("/{id}/edit" , [studentController::class , "edit"]);
    Route::post("/{id}" , [studentController::class , "update"]);
    });



    Route::prefix("/categories")->group(function(){
        Route::get("/" , [categoryController::class , "index"])->name("categories.index");
        Route::post("/" , [categoryController::class , "store"]);
        Route::get("/{id}/delete" , [categoryController::class , "destroy"]);
        Route::get("/{id}/edit" , [categoryController::class , "edit"]);
        Route::post("/{id}" , [categoryController::class , "update"]);
        });



        Route::prefix("/quizzes")->group(function(){
            Route::get("/" , [quizController::class , "index"])->name("quizzes.index");
            Route::post("/" , [quizController::class , "store"]);
            Route::get("/{id}/delete" , [quizController::class , "destroy"]);
            Route::get("/{id}/edit" , [quizController::class , "edit"]);
            Route::post("/{id}" , [quizController::class , "update"]);
            });



            Route::prefix("/skills")->group(function(){
                Route::get("/" , [skillController::class , "index"])->name("skills.index");
                Route::post("/" , [skillController::class , "store"]);
                Route::get("/{id}/delete" , [skillController::class , "destroy"]);
                Route::get("/{id}/edit" , [skillController::class , "edit"]);
                Route::post("/{id}" , [skillController::class , "update"]);
                });
