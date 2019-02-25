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

Route::get('/', function () {

    return view('pages.homepage');
});

Auth::routes();
Route::resource('users', 'UsersController');
Route::resource('lessons', 'LessonController');
Route::resource('instructors','InstructorController');
Route::resource('courses','CourseController');
//Route::resource('paypal','PaypalController');
Route::post('/paypal_pay','PaypalController@paypalPayment');
// route for processing payment
Route::post('/paypal', 'PaypalController@store');
// route for check status of the payment
Route::get('status', 'PaypalController@getPaymentStatus');
Route::get('/logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
Route::get('/home', 'HomeController@index')->name('home');
