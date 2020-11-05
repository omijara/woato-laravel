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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@Home')->name('Home');
Route::get('/about', 'PagesController@About')->name('About');
Route::get('/donate', 'PagesController@Donate')->name('Donate');
Route::get('/events', 'PagesController@Events')->name('Events');
Route::get('/volunteer', 'PagesController@Volunteer')->name('Volunteer');
Route::get('/contact', 'PagesController@Contact')->name('Contact');

/* Woato pages routes End here */ 


Auth::routes();

Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('/dashboard', 'UserController@index')->name('user.dashboard');

/* Woato Admin pages routes Start from here */ 

Route::get('/profile', 'AdminController@Profile')->name('profile');
Route::get('/change_password', 'AdminController@Change_Pass')->name('change_password');
Route::get('/post_list', 'AdminController@Post_list')->name('post_list');
Route::get('/volunteer_list', 'AdminController@Volunteer_list')->name('volunteer_list');
Route::get('/contact_list', 'AdminController@Contact_list')->name('contact_list');


//Route::get('view-records','ContactViewController@index');