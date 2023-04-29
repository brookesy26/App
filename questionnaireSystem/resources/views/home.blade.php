@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <a href="{{ route('questionnaires.create') }}" class="btn btn-primary col-md-12">Create New Questionnaire</a>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            @foreach($questionnaire as $q)
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center line-shade">
                            <div class="col-md-12 h5">
                                {{$q->title}}
                            </div>
                        </div>
                        <div class="row align-items-center line-shade">
                        <div class="col-md-12 justify-content-center mb-3">
                                <form method="POST" action="{{ route('questionnaires.update', $q->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn {{ $q->status ? 'btn-success' : 'btn-danger' }} toggle-mode w-100">
                                        <span class="mode">{{ $q->status ? 'Status - Online' : 'Status - Offline' }}</span>
                                    </button>
                                </form>
                            </div>
                            <div class="col-md-4 justify-content-center">
                                @if ($q->status)
                                    <a href="{{ route('questionnaires.show', $q->id) }}" class="btn btn-info col-md w-100">View Questionnaire</a>
                                @else
                                    <a href="{{ route('questionnaires.edit', $q->id) }}" class="btn btn-warning col-md w-100">Edit Questionnaire</a>
                                @endif
                            </div>
                            <div class="col-md-4 justify-content-center">
                                <a href="{{ route('questionnaires.response', $q->id) }}" class="btn btn-primary w-100">View Responses</a>
                            </div>
                            <div class="col-md-4 justify-content-center">
                                <form method="POST" action="{{ route('questionnaires.destroy', $q->id) }}" onsubmit="return confirm('Are you sure you want to delete this questionnaire?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
