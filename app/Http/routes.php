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

Route::get('/', 'PostsController@index');
Route::get('/contact','PostsController@getContact');
Route::get('page/{id}','PostsController@getPage');
Route::get('admin','ArticlesController@index');
Route::get('categories/article/{id}','CategoriesController@getArticle');
Route::get('category/{id}','PostsController@getCategory');
Route::resource('categories','CategoriesController');
Route::resource('articles','ArticlesController');
Route::resource('pages','PagesController');
