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

Route::get('/', 'PageController@index');

Route::get('register', 'Auth\RegisterController@registerPage');
Route::post('register', 'Auth\RegisterController@register');
Route::get('login', 'Auth\LoginController@loginPage');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LogoutController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/forums', 'PageController@forumsList')->name('forums.list');
Route::get('/forum/thread', 'PageController@threadPost')->name('thread');
Route::post('/add/comment', 'PageController@addComment');
Route::post('/add/reply', 'PageController@addReply');
Route::get('categories/{name}/threads', 'PageController@viewPostCategories');

Route::post('posts', 'PostsController@storePost');
Route::get('forum/thread/{id}', 'PostsController@viewPost');
Route::get('search/threads', 'PostsController@search');
Route::get('forums/filter', 'PostsController@filter');