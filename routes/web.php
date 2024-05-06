<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function (){
    return view('index');
});

Route::get('/detail', function (){
    return view('detail');
});

Route::get('/main', function (){
    return view('main');
});

Route::get('/index', [App\Http\Controllers\ListFilmController::class, 'get_data']);

Route::get('/', 'MoviesController@index')->name('index');
Route::get('/movies/{movie}', 'MoviesController@show')->name('detail');

Route::get('/detail', [DemoController::class, 'demo'])->name('demo');
// Route::get('/detail', [App\Http\Controllers\CommentController::class, 'get_comment']);

// Route::get('/profile', function (){
//     return view('profile');
// });


Route::get('student/create',[StudentController::class,'create']);
Route::post('student/store',[StudentController::class,'store'])->name('student.store');

Route::get('profile/create',[ProfileController::class,'create']);
Route::post('profile/store',[ProfileController::class,'store'])->name('profile.store');

Route::get('/comment', [App\Http\Controllers\CommentController::class, 'index'])->name('comment.index');
Route::post('/detail', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');

Route::get('/profile', [ProfileController::class, 'get_information'])->name('get_information');