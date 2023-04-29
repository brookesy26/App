@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form method="POST" action="{{ route('questionnaires.updateQuestionnaire', $questionnaire->id) }}">
          @csrf
          @method('PUT')
          <div class="card mb-3">
            <div class="card-header">Questionnaire Edit</div>
            <div class="card-body">
              <div class="form-group">
                <label for="title">Title</label>
                <input id="title" type="text" class="form-control" name="title" required autocomplete="title" autofocus value="{{ $questionnaire->title }}">
              </div>

              <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" class="form-control" name="description" required autocomplete="description">{{ $questionnaire->description }}</textarea>
              </div>
            </div>
            <button type="button" class="btn btn-secondary mt-3" id="add-question-btn">Add Question</button>
          </div>
          @foreach($questions as $q)
            <div class="card mt-3">
              <div class="card-header">Question {{ $loop->iteration }}</div>
              <div class="card-body question-container">
                <label>Question Text</label>
                <textarea class="form-control" name="question_{{ $q->id }}" required>{{ $q->text }}</textarea>
                <div class="option-container_{{ $q->id }}">
                  @foreach($q->options as $option)
                    <label>Option {{ $loop->iteration }}</label>
                    <input type="text" class="form-control" name="option_{{ $q->id }}_{{ $option->id }}" required value="{{ $option->text }}">
                  @endforeach
                </div>
                <button type="button" class="btn btn-secondary mt-3 add-option-btn_{{ $q->id }}">Add Option</button>
              </div>
            </div>
          @endforeach
        <button type="submit" class="btn btn-primary mt-3">Update Questionnaire</button>
      </form>
    </div>
  </div>
</div>
@endsection
