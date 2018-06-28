<?php

use Illuminate\Http\Request;
use App\Http\Resources\PostsCollection;
use App\Http\Resources\ServicesCollection;
use App\Post;
use App\Service;

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

Route::get('/posts', function()
{
    return new PostsCollection(Post::paginate());
});

Route::get('/services', function()
{
    return new ServicesCollection(Service::paginate());
});