@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">Home</div>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
                <div class="card-body"> Welcome to Research Junction, the go-to platform for filling in user-created questionnaires. If you're looking to create surveys of your own, simply register for an account and gain access to our powerful survey creator tool. With our intuitive admin dashboard, you can effortlessly craft custom surveys to suit your needs, and gather valuable insights from your audience. Sign up now to start creating surveys that drive your research forward!</div>
                </div>
                    @foreach($questionnaire as $q)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row line-shade align-items-center">
                                <div class="col-md-8 h5">
                                    {{$q->title}}
                                </div>
                                <div class="col-md-4 d-flex justify-content-end">
                                <a href="{{ route('questionnaires.show', $q->id) }}" class="btn btn-success">Complete Here!</a>
                                </div>
                            </div>
                        </div>
                    </div>
        @endforeach
    </div>
</div>
@endsection