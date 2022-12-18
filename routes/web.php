<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;

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

Route::get('piotrszczepanik/305407/people', [PeopleController::class, 'index']); 
Route::get('piotrszczepanik/305407/people/{people}', [PeopleController::class, 'show']);
Route::delete('piotrszczepanik/305407/people/{people}', [PeopleController::class, 'destroy']);
Route::put('piotrszczepanik/305407/people/{people}', [PeopleController::class, 'update']);
Route::post('piotrszczepanik/305407/people/{people}', [PeopleController::class, 'store']);
