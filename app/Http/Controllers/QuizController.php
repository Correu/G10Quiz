<?php

namespace App\Http\Controllers;

use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //create a quiz based on user selection
    public function submitQuiz(Request $request) {
        $solutions = json_decode(file_get_contents(public_path() . "/solutions_list.json"), true);
        dd($solutions);
        dd($request->all());
    }
}
