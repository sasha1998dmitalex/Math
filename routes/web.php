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

Route::get('/', [

 'uses' => 'PostsController@main',

 'as' => 'welcome'

]);


Route::get('/posts/index/{id}', [

    'uses' => 'PostsController@index',

    'as' => 'posts.index'

]);

Route::get('/posts/view', [

   'uses' => 'PostsController@view',

   'as' => 'posts.view'

]);


Route::get('/posts/create', [

    'uses' => 'PostsController@create',

    'as' => 'posts.create'

]);

Route::post('/posts/store', [

    'uses' => 'PostsController@store',

    'as' => 'posts.store'

]);

Route::post('/posts/index', [

   'uses'=>'PostsController@check',

   'as'=>'posts.check'


]);


Route::post('/posts/check/{id}', [

   'uses' => 'PostsController@check',

   'as' => 'posts.check'

]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
