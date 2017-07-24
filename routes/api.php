<?php

use App\Favorite;
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

Route::post('/snippets/{snippet}/favorite/{user}', function (Snippet $snippet, User $user)
{
    return Favorite::create(['object_id' => $snippet->id, 'user_id' => $user->id, 'type', Favorite::SNIPPET]);
});