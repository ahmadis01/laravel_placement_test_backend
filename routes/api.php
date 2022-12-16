<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\QuestionTypeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\TextController;
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
Route::post('/submit/{student_id}/{language_id}',[StudentController::class, 'Submit']);

//languages
Route::get('/language',[LanguageController::class, 'GetLanguages']);
Route::get('/language/{id}',[LanguageController::class, 'GetLanguage']);
Route::get('/languageByName/{name}',[LanguageController::class, 'GetLanguageByName']);
Route::post('/language',[LanguageController::class, 'AddLanguage']);
Route::put('/language/{id}',[LanguageController::class, 'UpdateLanguage']);
Route::delete('/language/{id}',[LanguageController::class, 'DeleteLanguage']);

//QuestionTypes
Route::get('/questiontype',[QuestionTypeController::class, 'GetQuestionTypes']);
Route::get('/questiontype/{id}',[QuestionTypeController::class, 'GetQuestionType']);
Route::post('/questiontype',[QuestionTypeController::class, 'AddQuestionType']);
Route::put('/questiontype/{id}',[QuestionTypeController::class, 'UpdateQuestionType']);
Route::delete('/questiontype/{id}',[QuestionTypeController::class, 'DeleteQuestionType']);

//Questions
Route::get('/question',[QuestionController::class, 'GetQuestions']);
Route::get('/question/{id}',[QuestionController::class, 'GetQuestion']);
Route::get('/questionByLanguage/{id}',[QuestionController::class , 'GetQuestionByLanguage']);
Route::get('/questionByQuestionType/{language_id}/{questionType_id}',[QuestionController::class , 'GetQuestionByQuestionType']);
Route::post('/question',[QuestionController::class, 'AddQuestion']);
Route::put('/question/{id}',[QuestionController::class, 'UpdateQuestion']);
Route::delete('/question/{id}',[QuestionController::class, 'DeleteQuestion']);

//Text
Route::get('/text',[TextController::class, 'GetTexts']);
Route::get('/text/{id}',[TextController::class, 'GetText']);
Route::post('/text',[TextController::class, 'AddText']);
Route::put('/text/{id}',[TextController::class, 'UpdateText']);
Route::delete('/text/{id}',[TextController::class, 'DeleteText']);


//records
Route::get('/record',[RecordController::class, 'GetRecords']);
Route::get('/record/{id}',[RecordController::class, 'GetRecord']);
Route::post('/record',[RecordController::class, 'AddRecord']);
Route::put('/record/{id}',[RecordController::class, 'UpdateRecord']);
Route::delete('/record/{id}',[RecordController::class, 'DeleteRecord']);



//answers
Route::get('/answer',[AnswerController::class, 'GetAnswers']);
Route::get('/answer/questionAnswers',[AnswerController::class, 'GetQuestionAnswers']);
Route::get('/answer/correctAnswers',[AnswerController::class, 'GetCorrectAnswers']);
Route::get('/answer/correctAnswer',[AnswerController::class, 'GetCorrectAnswer']);
Route::get('/answer/{id}',[AnswerController::class, 'GetAnswer']);
Route::post('/answer',[AnswerController::class, 'AddAnswer']);
Route::put('/answer/{id}',[AnswerController::class, 'UpdateAnswer']);
Route::delete('/answer/{id}',[AnswerController::class, 'DeleteAnswer']);