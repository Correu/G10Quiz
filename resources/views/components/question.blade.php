<!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
{{ $question }}
<div class="form-group">
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="{{ $answerOne }}" name="{{$question}}">{{ $answerOne }}
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="{{ $answerTwo }}" name="{{$question}}">{{ $answerTwo }}
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="{{ $answerThree }}" name="{{$question}}">{{ $answerThree }}
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="{{ $answerFour }}" name="{{$question}}">{{ $answerFour }}
        </label>
    </div>
</div>
