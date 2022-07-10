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

//route that loads the questions.
Route::get('/', [QuestionController::class, "retrieveQuestions"]);

//route to submit the quiz with answers in the request body.
Route::post('/submitQuiz', [QuizController::class, "submitQuiz"]);

