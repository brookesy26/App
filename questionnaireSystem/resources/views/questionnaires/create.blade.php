@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form method="POST" action="{{ route('questionnaires.store') }}">
        @csrf
        <div class="card mb-3">
          <div class="card-header">Questionnaire Creation</div>
          <div class="card-body">
            <div class="form-group">
              <label for="title">Title</label>
              <input id="title" type="text" class="form-control" name="title" required autocomplete="title" autofocus>
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea id="description" class="form-control" name="description" required autocomplete="description"></textarea>
            </div>
          </div>
          <button type="button" class="btn btn-secondary mt-3" id="add-question-btn">Add Question</button>
        </div>
            <div class="card">
                <div class="card-header">Questions</div>
                <div class="card-body" id="all-questions-container">
                </div>
            </div>
        <button type="submit" class="btn btn-primary mt-3">Create</button>
      </form>
    </div>
  </div>
</div>
@endsection
