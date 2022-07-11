<!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
{{ $questionNumber }}. {{ $question }}
<div class="form-group">
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="{{ $answerOne }}" name="{{$questionNumber}}" required>{{ $answerOne }}
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="{{ $answerTwo }}" name="{{$questionNumber}}" required>{{ $answerTwo }}
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="{{ $answerThree }}" name="{{$questionNumber}}" required>{{ $answerThree }}
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="{{ $answerFour }}" name="{{$questionNumber}}" required>{{ $answerFour }}
        </label>
    </div>
</div>
