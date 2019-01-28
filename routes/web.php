<?php

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
    //return view('welcome');
    /*$subject=App\Subject::find(1); 
    echo $subject->Mcomments;*/
    
    $comment1=App\Comment::find(2); 
    echo $comment1->Msubject;
});

//blog section--------------------------------------------------------
Route::get('/blogs', 'BlogController@index');
Route::get('/blog/{blog}', 'BlogController@show');