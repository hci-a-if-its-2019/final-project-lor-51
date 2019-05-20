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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/forums', 'PageController@forumsList')->name('forums.list');
Route::get('/forum/thread', 'PageController@threadPost')->name('thread');
Route::post('/add/comment', 'PageController@addComment');
Route::post('/add/reply', 'PageController@addReply');
Route::get('categories/{name}/{amount}/threads', 'PageController@viewPostCategories');

Route::post('posts', 'PostsController@storePost');