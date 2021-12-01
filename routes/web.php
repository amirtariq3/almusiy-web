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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'AdminController@index')->name('home');

//admin dashboard
Route::get('/admin-Dashboard', 'Backend\AdminController@index')->name('admin')->middleware('auth');

//admin banner
Route::get('/admin-banner', 'Backend\AdminController@banner')->name('banner')->middleware('auth');
Route::post('/admin-add-banner', 'Backend\AdminController@addBanner')->name('add.banner')->middleware('auth');
Route::get('/admin-edit-banner/{id}', 'Backend\AdminController@editBanner')->name('edit.banner')->middleware('auth');
Route::post('/admin-update-banner/{id}', 'Backend\AdminController@updateBanner')->name('update.banner')->middleware('auth');
Route::get('/admin-delete-banner/{id}', 'Backend\AdminController@deleteBanner')->name('delete.banner')->middleware('auth');

//admin team
Route::get('/admin-team', 'Backend\AdminController@adTeam')->name('admin.team')->middleware('auth');
Route::get('/admin-add-team', 'Backend\AdminController@addTeam')->name('add.Team')->middleware('auth');
Route::post('/admin-create-team', 'Backend\AdminController@createTeam')->name('create.Team')->middleware('auth');
Route::get('/admin-edit-team/{id}', 'Backend\AdminController@editTeam')->name('edit.Team')->middleware('auth');
Route::post('/admin-update-team/{id}', 'Backend\AdminController@updateTeam')->name('update.Team')->middleware('auth');
Route::get('/admin-delete-team/{id}', 'Backend\AdminController@deleteTeam')->name('delete.Team')->middleware('auth');

//admin contact email
Route::get('/admin-contact-email', 'Backend\AdminController@contactEmail')->name('admin.contactemail')->middleware('auth');
Route::get('/admin-delete-contact-email/{id}', 'Backend\AdminController@deleteContactEmail')->name('admin.contactdelete')->middleware('auth');

//admin request mail
Route::get('/admin-request-webemail', 'Backend\AdminController@webEmail')->name('admin.webemail')->middleware('auth');
Route::get('/admin-delete-webemail/{id}', 'Backend\AdminController@deleteWebEmail')->name('admin.webdelete')->middleware('auth');


Route::get('/admin-request-webemail', 'Backend\AdminController@webEmail')->name('admin.webemail')->middleware('auth');


//admin logout
Route::get('/admin-logout', 'Backend\AdminController@logout')->name('admin.logout');




//home page
Route::get('/', 'Frontend\MainController@index')->name('home');

//services
Route::get('/services', 'Frontend\MainController@services')->name('services');
Route::get('/web-application', 'Frontend\MainController@webApp')->name('web.application');
Route::get('/mobile', 'Frontend\MainController@mobileApp')->name('mobile.application');
Route::get('/graphic', 'Frontend\MainController@graphicApp')->name('graphic.application');

//team
Route::get('/team', 'Frontend\MainController@team')->name('team');

//contact us
Route::get('/contact', 'Frontend\MainController@contact')->name('contact');
Route::post('/contact-us', 'Frontend\MainController@contactUs')->name('contact.us');


//request qoute
Route::get('/qoute-website', 'Frontend\MainController@qouteWeb')->name('qoute.website');
Route::post('/contact-qoute-website', 'Frontend\MainController@contactQouteWeb')->name('contact.qoute.website');


Route::get('/qoute-mobile', 'Frontend\MainController@qouteMobile')->name('qoute.mobile');
