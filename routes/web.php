<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

//employees
Route::get('/employee',[EmployeeController::class,'index'])->name('employees.index');
Route::get('/employee/create',[EmployeeController::class,'create'])->name('employees.create');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employees.store');

Route::get('/employees/{id}',[EmployeeController::class,'show'])->name('employees.show');

Route::get('/employee/{id}',[EmployeeController::class,'edit'])->name('employees.edit');
Route::put('/employee/{id}',[EmployeeController::class,'update'])->name('employees.update');

Route::delete('/employee/{id}',[EmployeeController::class,'distroy'])->name('employees.destroy');

