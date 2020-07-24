<?php
use App\Cities;
use App\Deliverytimes;
use App\Deliveryholiday;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('cities', function(Request $request) {
    return Cities::create($request->all);
});

Route::post('cities/{name}', 'CitiesController@create');
Route::post('Deliverytimes/{delivery_at}', 'DeliverytimesController@create');
Route::post('cities/{citie_id}/deliverytimes',  'CitiesController@create');
Route::post('Deliverytimes/{deliveryholiday_date}',  'DeliverytimesController@create');
Route::post('cities/{deliverytimes_date}/{deliveryholiday_date}', 'CitiesController@create');
Route::get('cities/{citie_id}/deliverytimes_date/{number_of_days} ', 'CitiesController@index');

