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

Route::get('/', 'FrontPageController@redirectToLogin');

Route::get('/auth/{param}', 'FrontPageController@showFrontPage');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/simpozij/dashboard', 'HomeController@index')->name('home');

//Dashboard

//Štandovi
Route::get('/simpozij/booth', 'HomeController@showBooths')->name('booths');

//webinars
Route::get('/simpozij/webinars', 'HomeController@showWebinars')->name('webinars');

//QA
Route::get('/simpozij/QA', 'HomeController@showQA')->name('QAs');

//Ondemand
Route::get('/simpozij/ondemand', 'HomeController@showOnDemand')->name('ondemands');

//admin get
Route::get('/simpozij/createwebinar', 'SuperAdminController@showCreateWebinarPage');
Route::get('/simpozij/addpanelist', 'SuperAdminController@showAddPanelistPage');
Route::get('/simpozij/addadmins', 'SuperAdminController@showAddAdminPage');

//admin post
