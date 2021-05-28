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

Auth::routes(['verify' => true]);

Route::get('/simpozij/dashboard', 'HomeController@index')->name('home');

//Dashboard

//Štandovi
Route::get('/simpozij/booth', 'HomeController@showBooths')->name('booths');
Route::get('/simpozij/booth/{parameter}', 'HomeController@showBooth')->name('booth');

//webinars
Route::get('/simpozij/webinars', 'HomeController@showWebinars')->name('webinars');
Route::get('/simpozij/webinars/{id}', 'HomeController@showWebinar')->name('webinar');
Route::get('/simpozij/webinars/webinar/{id}', 'HomeController@webinar');

Route::post('/simpozij/webinar/getBoothData', 'HomeController@getBoothData')->name('getBoothData');
Route::post('/simpozij/webinar/getSingleBoothData', 'HomeController@getSingleBoothData')->name('getSingleBoothData');

//Ondemand
Route::get('/simpozij/summary ', 'HomeController@showSummary')->name('summary');
Route::post('/simpozij/exibition/getsummarydata', 'HomeController@getSummaryData')->name('getSummaryData');

//Exibition
Route::get('/simpozij/exibition', 'HomeController@showExibition')->name('exibition');
Route::post('/simpozij/exibition/getExhibitionData', 'HomeController@getExhibitionData')->name('getExhibitionData');

//Videos
Route::get('/simposium/getvideos', 'HomeController@getVideoData')->name('getExhibitionData');

//admin get
Route::get('/simpozij/createwebinar', 'SuperAdminController@showCreateWebinarPage')->name('createWebinarPage');
Route::get('/simpozij/addadmins', 'SuperAdminController@showAddAdminPage');
Route::get('/simpozij/addsponsor', 'SuperAdminController@showAddSponsorPage');
Route::get('/simpozij/editsponsor/{id}', 'SuperAdminController@editSponsorPage')->name('editSponsorView');
Route::get('/simpozij/addexgibition', 'SuperAdminController@showAddExhibition')->name('addExhibitionPage');
Route::get('/simpozij/addsummary', 'SuperAdminController@showAddSummary')->name('addSummaryPage');
Route::get('/simpozij/addvideo', 'SuperAdminController@showAddVideoPage')->name('addVideoPage');

//admin post
Route::post('/simposij/addsponsor/add', 'SuperAdminController@addSponsor')->name('addSponsor');
Route::post('/simposij/editsponsor/edit', 'SuperAdminController@editSponsor')->name('editSponsor');
Route::post('/simposij/addwebinar/add', 'SuperAdminController@addWebinar')->name('addWebinar');
Route::post('/simposij/addpanelist/add', 'SuperAdminController@addPanelist')->name('addPanelist');
Route::post('/simposij/addexgibition/add', 'SuperAdminController@addExhibition')->name('addExhibition');
Route::post('/simposij/addsummary/add', 'SuperAdminController@addSummary')->name('addSummary');
Route::post('/simpozij/addvideo/add', 'SuperAdminController@addVideo')->name('addVideo');

