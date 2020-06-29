<?php

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

Route::post('login','AuthController@login');
Route::post('register','AuthController@register');
Route::get('/staff','StaffController@index');
Route::post('/staff','StaffController@store');
Route::group(['middleware' => 'auth:api'], function () {
    Route::get('logout','AuthController@logout');
    // Route::get('user','UserController@user');
});
Route::get('/send',function (){
    Mail::send('emails.passwordReset', [], function ($message) {
        $message->from('john@johndoe.com', 'John Doe');
        $message->to('yshamrat@gmail.com', 'Yasin Shamrat');
        $message->subject('Subject');
        
    });
});
