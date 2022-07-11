<!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
{{ $questionNumber }}. {{ $question }}
<div class="form-group">
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="{{ $answerOne }}" name="{{$questionNumber}}">{{ $answerOne }}
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="{{ $answerTwo }}" name="{{$questionNumber}}">{{ $answerTwo }}
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="{{ $answerThree }}" name="{{$questionNumber}}">{{ $answerThree }}
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="{{ $answerFour }}" name="{{$questionNumber}}">{{ $answerFour }}
        </label>
    </div>
</div>
