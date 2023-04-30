@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('submit.response', $questionnaire->id) }}">
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
                                        <input class="form-check-input" type="radio" name="option_{{ $question->id }}" id="{{ $option->id }}" value="{{ $option->id }}">
                                        <label class="form-check-label" for="{{ $option->id }}">{{ $option->text }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    <input type="checkbox" name="agree" value="1" required>
                    <label class="form-check-label">I consent to this information being stored</label>
                    <button type="submit" class="btn btn-primary mt-3 col-md-12">Submit Response</button>
                </form>
            </div>
        </div>
    </div>
@endsection
