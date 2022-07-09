<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

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

//route to create the quiz
Route::get('/createQuiz/{type}', [QuizController::class, "createQuiz"]);
//route to return the question
Route::get('/getQuestions', [QuestionController::class, "retrieveQuestions"]);
