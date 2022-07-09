<!-- Nothing worth having comes easy. - Theodore Roosevelt -->
<div class="col">
    <div class="row">
        <x-question question="{{ $question['questions'][0]['question'] }}" />
        @foreach ($question['questions'] as $quest)
            <x-question question="{{ $quest['question'] }}" />
        @endforeach
    </div>
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-secondary">Previous</button>
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary">Next</button>
        </div>
    </div>
</div>
