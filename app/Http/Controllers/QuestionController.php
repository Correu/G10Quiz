<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //return array of questions from json file
    public function retrieveQuestions() {
        $content = json_decode(file_get_contents(public_path() . "/question_list.json"), true);
        
        return view('welcome', ['question' => $content]);
    }
}
