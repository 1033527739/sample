<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/fuck', function () {
    return view('welcome0');
});

Route::get('/fuckyou', function () {
    return 'fuckyou';
});
Route:: get('/hello',function(){
   return  view('admin.hello');
});
//静态页面
Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');
//用户注册
Route::get('signup','UserController@create')->name('signup');

//Route::get('/home1','StaticPagesController@home1')->name('home');
