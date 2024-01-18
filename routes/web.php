<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[PageController::class,'login']);
Route::get('auth/',[PageController::class,'login']);
//Route::get('login/',[PageController::class,'auth']);
Route::get('dashboard/',[PageController::class,'dashboard']);
Route::get('farmers/',[PageController::class,'farmersDashboard']);
Route::get('register/',[PageController::class,'register']);
Route::post('login/',[PageController::class,'user_auth']);
Route::get('logout/',[PageController::class,'logout']);
Route::post('user_registration/',[PageController::class,'user_registration']);
Route::post('create_new_farmers/',[PageController::class,'createNewFarmers']);
Route::get('view_farmers/{id}',[PageController::class,'viewFarmers']);
