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
use App\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;

/* Route::get('/', function () {
    $recipe = 'pancakes';
    if (Auth::check())
        $user = (new User())->getUser()->id;
    else
        $user = '';
    return view('welcome')->with(compact('recipe', 'user'));
});

Route::get('/recipes/{recipe}', function($recipe) {
    $user = (new User())->getUser();
    return view('recipes.'.$recipe)->with(compact('recipe', 'user'));
}); */

Route::get('/', 'PagesController@index');
Route::get('/calendar', 'PagesController@calendar');
Route::get('/recipes', 'PagesController@recipes_collection');
Route::get('/recipes/{recipe}', 'PagesController@recipe');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
