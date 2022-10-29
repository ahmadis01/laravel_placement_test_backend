<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//students
Route::get('/student',[StudentController::class, 'GetStudents']);
Route::get('/student/{id}',[StudentController::class, 'GetStudent']);
Route::get('/studentbyname/{name}',[StudentController::class, 'GetStudentByName']);
Route::post('/student',[StudentController::class, 'AddStudent']);
Route::put('/student/{id}',[StudentController::class, 'UpdateStudent']);
Route::delete('/student/{id}',[StudentController::class, 'DeleteStudent']);