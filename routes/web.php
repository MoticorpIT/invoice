<?php

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

Route::get('home', function () {
    return view('welcome');
});

Route::get('chad', function () {
    return view('chad.chad-file');
});
Route::get('joey', function () { return view('chad.joey-file');} );


Route::get('customers/{customer}/locations/create', 'LocationController@create');
Route::post('customers/{customer}/locations', 'LocationController@store');
Route::get('customers/{customer}/locations/{location}/edit', 'LocationController@edit');
Route::patch('customers/{id}/locations/{location}', 'LocationController@update');
Route::delete('customers/{id}/locations/{location}', 'LocationController@destroy');

Route::resource('customers', 'CustomerController');
Route::resource('invoices', 'InvoiceController');
Route::resource('products', 'ProductController');
Route::resource('locations', 'LocationController');

Route::get('products/categories/{category}', 'CategoryController@index');

//break the routes out of the helper to kill registration
//Auth::routes();

// Authentication Routes...
$this->get('/', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('/', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes... //these get commented out
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');


// Route::get('/home', 'HomeController@index')->name('home');
