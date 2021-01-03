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
  
  
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'LoginController@index');
//Route::get('/admindashboard','LoginController@dashboard');

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('admin/home','AdminController@index');
//Route::get('admin','Admin\LoginController@showLoginForm')->name('login.admin');
//Route::post('admin','Admin\LoginController@login');
//Tapan 
Route::get('tapan/home','TapanController@index');
Route::get('tapan','Tapan\LoginController@showLoginForm')->name('login.tapan');
Route::post('tapan','Tapan\LoginController@login');
/*Route::get('/login',  'LoginController@loginForm')->name('login');
Route::post('/login',  'LoginController@login');


Route::get('/logout',  'LoginController@logout');

Route::get('/dashboard', 'HomeController@dashboard')->middleware('auth');
Route::get('/main',		'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin',	'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');
*/