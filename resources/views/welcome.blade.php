@include('layouts.header')
<!-- Start of the body -->

<body class="antialiased">
    <div class="container p-4">
        <div class="col justify-content-center">
            <h1>Simple Quiz Project</h1>
        </div>
        <form method="POST" action="/submitQuiz" class="was-validated">
            @csrf
            @foreach ($question['questions'] as $quest)
                <x-question questionNumber="{{ $loop->iteration }}" question="{{ $quest['question'] }}" answerOne="{{ $quest['answer_one'] }}"
                    answerTwo="{{ $quest['answer_two'] }}" answerThree="{{ $quest['answer_three'] }}"
                    answerFour="{{ $quest['answer_four'] }}" />
            @endforeach
            <button type="submit" class="btn btn-primary">Submit Answers</button>
        </form>
    </div>
</body>

@include('layouts.footer')