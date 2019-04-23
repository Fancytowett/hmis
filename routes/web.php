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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add_rec', 'RecController@create')->name('add_rec');
Route::post('/store_rec', 'RecController@store')->name('store_rec');
Route::get('/edit_rec/{id}', 'RecController@edit')->name('edit_rec');
Route::get('/edit_rec_dash/{id}', 'RecController@edit_rec_dash')->name('edit_rec_dash');
Route::post('/update_rec/{id}', 'RecController@update')->name('update_rec');
Route::post('/destroy_rec/{id}', 'RecController@destroy')->name('destroy_rec');
Route::get('/index_rec', 'RecController@index')->name('index_rec');
Route::get('/rec_profile', 'RecController@show_rec')->name('rec_profile');
Route::get('/rec_dash', 'HomeController@rec_dash')->name('rec_dash');
Route::get('/add_patient', 'PatientController@create')->name('add_patient');
Route::post('/store_patient', 'PatientController@store')->name('store_patient');
Route::get('/edit_patient/{id}', 'PatientController@edit')->name('edit_patient');
Route::get('/edit_patient_rec/{id}', 'PatientController@edit_patient_rec')->name('edit_patient_rec');
Route::get('/destroy_patient/{id}', 'PatientController@destroy')->name('destroy_patient');
Route::get('/index_patient', 'PatientController@index')->name('index_patient');
Route::get('/index_patient_rec', 'PatientController@index_patient_rec')->name('index_patient_rec');
Route::post('/update_patient/{id}', 'PatientController@update')->name('update_patient');
Route::get('/patient_dia', 'PatientController@patient_diagnosis')->name('p_d');
Route::get('/add_doctor', 'DoctorController@create')->name('add_doctor');
Route::post('/store_doctor', 'DoctorController@store')->name('store_doctor');
Route::get('/index_doctor', 'DoctorController@index')->name('index_doctor');
Route::get('/edit_doctor/{id}', 'DoctorController@edit')->name('edit_doctor');
Route::get('/edit_doc_dash/{id}', 'DoctorController@edit_doc_dash')->name('edit_doc_dash');
Route::post('/update_doctor/{id}', 'DoctorController@update')->name('update_doctor');
Route::get('/destroy_doctor/{id}', 'DoctorController@destroy')->name('destroy_doctor');
Route::get('/doc_schedule', 'DoctorController@doc_schedule')->name('doc_sche');
Route::get('/county/create', 'CountyController@create')->name('add_county');
Route::post('/add_county', 'CountyController@store')->name('store_county');
Route::get('/edit_county/{id}', 'CountyController@edit')->name('edit_county');
Route::post('/update_county/{id}', 'CountyController@update')->name('update_county');
Route::get('/destroy_county/{id}', 'CountyController@destroy')->name('destroy_county');
Route::get('/county_index', 'CountyController@index')->name('index_county');
Route::get('/add_consult', 'ConsultationController@create')->name('add_consult');
Route::post('/store_consult', 'ConsultationController@store')->name('store_consult');
Route::get('/edit_consult/{id}', 'ConsultationController@edit')->name('edit_consult');
Route::get('/index_consult', 'ConsultationController@index')->name('index_consult');
Route::post('/update_consult/{id}', 'ConsultationController@update')->name('update_consult');
Route::get('/destroy_consult/{id}', 'ConsultationController@destroy')->name('destroy_consult');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
//Route::get('/land', 'HomeController@landing_page')->name('land');
Route::get('/doc_dash', 'DoctorController@doc_dash')->name('doc_dash');
Route::get('/doc_profile', 'DoctorController@show_doc')->name('doc_profile');
Route::get('/doc_schedule', 'DoctorController@doc_schedule')->name('doc_schedule');
Route::get('/add_diagnosis/{id}', 'HomeController@create_diagnosis')->name('add_diagnosis');
Route::post('/store_diagnosis/{id}', 'HomeController@store_diagnosis')->name('store_diagnosis');
Route::get('/index_diagnosis', 'HomeController@index_diagnosis')->name('index_diagnosis');
Route::post('/store_schedule', 'HomeController@store_schedule')->name('store_schedule');
Route::get('/add_schedule', 'HomeController@add_schedule')->name('add_schedule');
Route::get('/index_schedule', 'HomeController@index_schedule')->name('index_schedule');
Route::get('/add_roomdoc', 'Room_DoctorController@create')->name('create_roomdoc');
Route::post('/store_roomdoc', 'Room_DoctorController@store')->name('store_roomdoc');
Route::get('/edit_roomdoc/{id}', 'Room_DoctorController@edit')->name('edit_roomdoc');
Route::post('/update_roomdoc/{id}', 'Room_DoctorController@update')->name('update_roomdoc');
Route::get('/index_roomdoc', 'Room_DoctorController@index')->name('index_roomdoc');
Route::get('/destroy_roomdoc/{id}', 'Room_DoctorController@destroy')->name('destroy_roomdoc');

Route::post('contact_email','MailController@mail_send')->name('contactus');

