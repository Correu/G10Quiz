<?php

namespace App\Http\Controllers;

use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //create a quiz based on user selection
    public function submitQuiz(Request $request) {
        $solutions = json_decode(file_get_contents(public_path() . "/solutions_list.json"), true);
        //dd($request->all());
        $correctAnswers = 0;
        $count = 1;
        foreach($solutions['solutions'] as $solution) {
            print_r($request->$count);
            if($solution['solution'] == $request->$count) {
                $correctAnswers++;
            }
            $count++;
        }
        
        return view('results', ['questions' => $count-1, 'correctAnswers' => $correctAnswers]);
    }
}
