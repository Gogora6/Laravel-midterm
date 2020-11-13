<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', 'App\Http\Controllers\EmployeeController@getEmployees')
    ->name('employees.list');
Route::get('/employee/{employee_id}/edit', 'App\Http\Controllers\EmployeeController@editEmployee')
    ->name('employee.edit');
Route::post('/employee/add', 'App\Http\Controllers\EmployeeController@addEmployee')
    ->name('employee.add');
Route::post('/employee/{employee_id}/update', 'App\Http\Controllers\EmployeeController@updateEmployee')
    ->name('employee.update');
Route::post('/employee/delete', 'App\Http\Controllers\EmployeeController@deleteEmployee')
    ->name('employee.delete');


Route::get('/companies', 'App\Http\Controllers\CompanyController@getCompanies')
    ->name('companies.list');
Route::get('/company/{company_id}/edit', 'App\Http\Controllers\CompanyController@editCompany')
    ->name('company.edit');
Route::post('/company/add', 'App\Http\Controllers\CompanyController@addCompany')
    ->name('company.add');
Route::post('/company/{company_id}/update', 'App\Http\Controllers\CompanyController@updateCompany')
    ->name('company.update');
Route::post('/company/delete', 'App\Http\Controllers\CompanyController@deleteCompany')
    ->name('company.delete');
