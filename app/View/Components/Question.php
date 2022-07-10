<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Question extends Component
{

    /**
     * The String of the Question
     */
    public $question;
    public $answerOne;
    public $answerTwo;
    public $answerThree;
    public $answerFour;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($question, $answerOne, $answerTwo, $answerThree, $answerFour)
    {
        //
        $this->question = $question;
        $this->answerOne = $answerOne;
        $this->answerTwo = $answerTwo;
        $this->answerThree = $answerThree;
        $this->answerFour = $answerFour;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.question');
    }
}
