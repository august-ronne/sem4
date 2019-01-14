<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Get comment belonging to recipe in url */
Route::get('comments/{recipe}', 'CommentController@index');

/* Get a single comment */
Route::get('comments/{id}', 'CommentController@show');

/* Post a new comment */
Route::post('comment', 'CommentController@store');

/* Delete a comment */
Route::delete('comment/{id}', 'CommentController@destroy');
