@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-header text-center h4">{{ $questionnaire->title }} - Responses</div>
          <div class="card-body">
            <div class="form-group">
                <p>{{ $questionnaire->description }}</p>
            </div>
           </div>
        </div>
        @foreach($responses as $response)
        <div class="card mb-3">
          <div class="card-header text-center h4">Response {{$loop->iteration}}</div>
        </div>
        @foreach($response->answers as $answer)
            <div class="card mb-3">
                <div class="card-header">Q{{ $loop->iteration }}. {{ $answer->question->text }}</div>
                <div class="card-body" id="all-questions-container">
                        <div class="form-check">
                            <label class="form-check-label" for="{{ $answer->id }}">{{ $answer->option->text}}</label>
                        </div>
                </div>
            </div>
        @endforeach
        @endforeach
    </div>
  </div>
</div>
@endsection