<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', ProductController::class);


Route::get('sendemail','SendEmailController@index')->name('sendemail');
Route::post('sendemail.store','SendEmailController@store')->name('sendemail.store');

//model route define here 
Route::resource('/model', 'AmitController');
Route::get('thanks', 'AmitController@thanks');











