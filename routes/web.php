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
    return redirect('/patient/create');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('patient', 'PatientController');


Route::group(['prefix' => 'doctor', 'namespace' => 'Doctor'], function () {
    Route::get('/patient', 'PatientController@index')->name('doctor.patient.index');
    Route::get('/patient/{id}', 'PatientController@show')->name('doctor.patient.show');
    Route::post('/patient/pair', 'PatientController@pair')->name('doctor.patient.pair');

    Route::group(['prefix' => 'patient/{id}'], function () {
        Route::get('/checkup/create', 'CheckupController@create')->name('doctor.checkup.create');
        Route::get('/checkup/{id_checkup}', 'CheckupController@show')->name('doctor.checkup.show');
        Route::get('/checkup/{id_checkup}/edit', 'CheckupController@edit')->name('doctor.checkup.edit');
        Route::put('/checkup/{id_checkup}', 'CheckupController@update')->name('doctor.checkup.update');
        Route::post('/checkup', 'CheckupController@store')->name('doctor.checkup.store');
        Route::delete('/checkup/{id_checkup}', 'CheckupController@destroy')->name('doctor.checkup.destroy');
    });


});
