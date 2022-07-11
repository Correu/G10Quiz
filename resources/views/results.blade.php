@include('layouts.header')

<body class="antialiased">
    <div class="container">
        {{ $questions }}
        {{ $correctAnswers }}
        Results Page
    </div>
</body>

@include('layouts.footer')