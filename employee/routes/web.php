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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/salary', 'salarycontroller@create');
Route::post('salary', 'salarycontroller@store')->name('salary');

Route::get('/empview', 'empcontroller@getalldata');
Route::get('/edit/{id}', 'empcontroller@show');
Route::post('update/{id}', 'empcontroller@updatefunction');
Route::get('/delete/{id}', 'empcontroller@deletefunction');

Route::get('/profile', 'empcontroller@empprofile')->name('profile');
// Route::resource('profile', 'empcontroller');

Route::get('/empstatus','empcontroller@emprctstatus');
Route::put('empstatus/{id}', 'empcontroller@update')->name('empStatuUpdate');


Route::get('/assignproject', 'projectcontroller@show');
Route::post('assignproject', 'projectcontroller@getdata')->name('assignproject');

Route::get('addproject', 'projectcontroller@adddisplay');
Route::post('addproject', 'projectcontroller@adddata')->name('addproject');

Route::get('/applyleave','LeaveController@create');
Route::post('applyleave','LeaveController@store')->name('applyleave');

Route::get('/empleave', 'LeaveController@show');
Route::put('empleave/{id}', 'LeaveController@update')->name('leaveStatuUpdate');

Route::get('/leavehistory', 'LeaveController@history');

//Route::get('/prctstatus', 'projectcontroller@prctstatusview');

Route::get('/searchemp','searchcontroller@index');
Route::get('/searchemp','searchcontroller@search');


// from here onwards all routes will be exclusieve for admin only 
// Route::prefix('admin')->group(function (){
    
// Route::get('/','AdminController@index')->name('admin.dashboard');
// Route::get('login','Auth\Adminlogincontroller@showLoginForm')->name('admin.login');
// Route::post('login','Auth\Adminlogincontroller@login')->name('admin.login.submit');
// });

Route::prefix('admin')->group(function () {

    Route::get('/','AdminController@index')->name('admin.dashboard');   
});