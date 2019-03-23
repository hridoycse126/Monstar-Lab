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
    return view('index');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/forget', function () {
    return view('admin.forgetpage');
});

/*City Routes*/
Route::get('/city','CityController@index')->name('cities');
Route::get('/city/show','CityController@show');
Route::POST('/city/insert','CityController@store');
Route::get('/city/update','CityController@edit');
Route::POST('/city/update/insert','CityController@update');
Route::get('/city/delete','CityController@destroy');


/*Country Routes*/
Route::get('/country','CountryController@index')->name('countries');
Route::get('/country/show','CountryController@show');
Route::POST('/country/insert','CountryController@store');
Route::get('/country/update','CountryController@edit');
Route::POST('/country/update/insert','CountryController@update');
Route::get('/country/delete','CountryController@destroy');


/*Salary Routes*/
Route::get('/salary','SalaryController@index')->name('salaries');
Route::get('/salary/show','SalaryController@show');
Route::POST('/salary/insert','SalaryController@store');
Route::get('/salary/update','SalaryController@edit');
Route::POST('/salary/update/insert','SalaryController@update');
Route::get('/salary/delete','SalaryController@destroy');


/*Department Routes*/
Route::get('/department','DepartmentController@index')->name('departments');
Route::get('/department/show','DepartmentController@show');
Route::POST('/department/insert','DepartmentController@store');
Route::get('/department/update','DepartmentController@edit');
Route::POST('/department/update/insert','DepartmentController@update');
Route::get('/department/delete','DepartmentController@destroy');

/*Division Routes*/
Route::get('/division','DivisionController@index')->name('divisions');
Route::get('/division/show','DivisionController@show');
Route::POST('/division/insert','DivisionController@store');
Route::get('/division/update','DivisionController@edit');
Route::POST('/division/update/insert','DivisionController@update');
Route::get('/division/delete','DivisionController@destroy');

/*Employee Routes*/
Route::get('/employee','EmployeeController@index')->name('employees');
Route::get('/employee/show','EmployeeController@show');
Route::get('/employee/list','EmployeeController@create');
Route::POST('/employee/insert','EmployeeController@store');
//Route::get('/employee/update','DivisionController@edit');
//Route::POST('/employee/update/insert','DivisionController@update');
//Route::get('/employee/delete','DivisionController@destroy');