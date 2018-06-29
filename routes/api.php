<?php

use Illuminate\Http\Request;
use App\Http\Resources\NewsCollection;
use App\Http\Resources\ServicesCollection;
use App\Http\Resources\CommunicationsCollection;
use App\Http\Resources\InternetsCollection;
use App\Http\Resources\BeautifulNumbersCollection;


use App\News;
use App\Service;
use App\Communication;
use App\Internet;
use App\BeautifulNumber;

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

Route::get('/news', function()
{
    return new NewsCollection(News::paginate(10));
});

Route::get('/services', function()
{
    return new ServicesCollection(Service::paginate(10));
});


Route::get('/communications', function()
{
    return new CommunicationsCollection(Communication::paginate(10));
});

Route::get('/internets', function()
{
    return new InternetsCollection(Internet::paginate(10));
});

Route::get('/beautiful-numbers', function()
{
    return new BeautifulNumbersCollection(BeautifulNumber::paginate(10));
});