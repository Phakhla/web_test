<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
    // return csrf_token();
// });

// Route::get('about', function () {
//     return 'about page';
// });

// Route::get('user/{id?}/{name?}', function ($id=" ", $name=" ") {
//     return 'User = '.$id.'<br>Name = '.$name;
// })-> where(['id' => '[0-9]+','name' => '[A-Za-z]+']);



// Route::post('product', function () {
//     return 'This is my product';
// }) ;

// Route::put('product', function () {
//     return 'Update product';
// });

// Route::delete('product', function () {
//     return 'Delete product';
// });

                // send to Controller
// Route::get('/','App\Http\Controllers\HomeController@home');
// Route::get('service','App\Http\Controllers\HomeController@service');
// Route::get('contact','App\Http\Controllers\HomeController@contact');


Route::get('/',[HomeController::class ,'home']);
Route::get('about',[HomeController::class ,'about']);
Route::get('service',[HomeController::class ,'service']);
Route::get('contact',[HomeController::class ,'contact']);
Route::get('login',[HomeController::class ,'login']);





// Route::get('/','HomeController@home'); 
// Route::get('service','HomeController@service');
// Route::get('contact','HomeController@contact');