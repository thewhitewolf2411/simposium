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

Route::get('/auth/{param}', 'FrontPageController@showFrontPage')->name('login');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes(['verify' => true]);

Route::get('/simpozij/dashboard', 'HomeController@index')->name('home');

//Dashboard

//Štandovi
Route::get('/simpozij/booth', 'HomeController@showBooths')->name('booths');
Route::get('/simpozij/booth/{parameter}', 'HomeController@showBooth')->name('booth');

//webinars
Route::get('/simpozij/webinars', 'HomeController@showWebinars')->name('webinars');
Route::get('/simpozij/webinars/{any}', 'HomeController@showWebinar')->name('webinar');
Route::get('/simpozij/webinars/{any}', function () {
    return view('app');
})->where('any','.*');

//QA
Route::get('/simpozij/QA', 'HomeController@showQA')->name('QAs');

//Ondemand
Route::get('/simpozij/ondemand', 'HomeController@showOnDemand')->name('ondemands');

//admin get
Route::get('/simpozij/createwebinar', 'SuperAdminController@showCreateWebinarPage')->name('createWebinarPage');
Route::get('/simpozij/addpanelist', 'SuperAdminController@showAddPanelistPage');
Route::get('/simpozij/addadmins', 'SuperAdminController@showAddAdminPage');
Route::get('/simpozij/addsponsor', 'SuperAdminController@showAddSponsorPage');

//admin post
Route::post('/simposij/addsponsor/add', 'SuperAdminController@addSponsor')->name('addSponsor');
Route::post('/simposij/addwebinar/add', 'SuperAdminController@addWebinar')->name('addWebinar');