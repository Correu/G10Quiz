@include('layouts.header')

<body class="antialiased">
    <div class="container p-4">
        @if ($correctAnswers == 10)
            <h1>
                Congratulations!!! You did well on this quiz with a perfect score!
            </h1>
        @elseif (7 <= $correctAnswers && $correctAnswers <= 9)
            <h1>
                Good Job! You passed the quiz with a {{ $correctAnswers }} out of {{ $questions }}
            </h1>
        @else
            <h1>
                Keep on studying!!! You got a {{ $correctAnswers }} out of {{ $questions }}
            </h1>
        @endif
        <a href="/"><button type="button" class="btn btn-primary">Retake Quiz</button></a>
    </div>
</body>

@include('layouts.footer')
