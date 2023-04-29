@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form method="POST" action="{{ route('questionnaires.') }}">
      @csrf
        <div class="card mb-3">
          <div class="card-header text-center h4">{{ $questionnaire->title }}</div>
          <div class="card-body">
            <div class="form-group">
                <p>{{ $questionnaire->description }}</p>
            </div>
           </div>
        </div>
        @foreach($questionnaire->questions as $question)
            <div class="card mb-3">
                <div class="card-header">Q{{ $loop->iteration }}. {{ $question->text }}</div>
                <div class="card-body" id="all-questions-container">
                @foreach($question->options as $option)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="{{ $question->id }}" id="{{ $option->id }}" value="{{ $option->id }}">
                            <label class="form-check-label" for="{{ $option->id }}">{{ $option->text }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary mt-3">Submit Response</button>
      </form>
    </div>
  </div>
</div>
@endsection