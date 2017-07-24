<?php

use App\User;
use App\Snippet;
use App\Language;
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

Route::get('/', 'SnippetsController@index')->name('home');
Route::get('/snippets/create', 'SnippetsController@create');
Route::get('/snippets/{snippet}', 'SnippetsController@show');
Route::post('/snippets', 'SnippetsController@store');
Route::get('/snippets/{snippet}/fork', 'SnippetsController@create');
Route::get('/snippets/language/{language}', function (Snippet $snippet, Language $language) {
    return view('snippets.index', [
        'snippets' => $snippet->byLanguage($language->id),
        'type' => 'language',
        'value' => $language->name
    ]);
});
Route::get('/snippets/author/{user}', function (Snippet $snippet, User $user)
{
    return view('snippets.index', [
        'snippets' => $snippet->byAuthor($user->id),
        'type' => 'author',
        'value' => $user->name
    ]);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
