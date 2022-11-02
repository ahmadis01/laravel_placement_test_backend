<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\LanguageController;
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
Route::get('/studentlanguages/{id}',[StudentController::class, 'GetStudentLanguages']);
Route::post('/addStudentLanguage/{studentId}/{languageId}',[StudentController::class, 'AddStudentLanguage']);

//languages
Route::get('/language',[LanguageController::class, 'GetLanguages']);
Route::get('/language/{id}',[LanguageController::class, 'GetLanguage']);
Route::get('/languageByName/{name}',[LanguageController::class, 'GetLanguageByName']);
Route::post('/language',[LanguageController::class, 'AddLanguage']);
Route::put('/language/{id}',[LanguageController::class, 'UpdateLanguage']);
Route::delete('/language/{id}',[LanguageController::class, 'DeleteLanguage']);