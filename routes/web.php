<?php

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

//mail without Mailable
// Route::get('contact', 'ContactController@index');
// Route::post('contact', 'ContactController@send');


//Mailable
Route::get('contact2', 'MailableController@index');
Route::post('contact2', 'MailableController@send');


//Validatoin
Route::get('validate', 'ValidateController@index');
Route::post('validate', 'ValidateController@send');

//Validatorファサード
Route::get('validator', 'ValidatorController@index');
Route::post('validator', 'ValidatorController@send');



Route::get('scss', function () {
    return view('scss');
});
Route::get('test-css', function () {
    return view('test-css');
});

//擬似要素・クラス
Route::group(['prefix'=>'pseudo', 'as'=>'pseudo'], function(){
    Route::get('element', 'PseudoController@element')->name('element');
    Route::get('class', 'PseudoController@class')->name('class');
    Route::get('modal', 'PseudoController@modal')->name('modal');
    Route::get('position', 'PseudoController@position')->name('position');
    Route::get('pointer', 'PseudoController@pointer')->name('pointer');
    Route::get('selection', 'PseudoController@selection')->name('selection');
});

Route::get('d-table', function(){ return view('d-table'); });

Route::get('animate', function(){ return view('animate'); });

Route::get('line', function(){ return view('line'); });

Route::get('grid', function(){ return view('grid'); });

Route::get('m-grid', function(){ return view('m-grid'); });