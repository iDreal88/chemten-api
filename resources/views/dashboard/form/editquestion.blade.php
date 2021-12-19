@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">Edit Question</h1>

<form action="{{ route('question.update', $question->id) }}" method="POST" class="mt-2 ms-5" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Exercise ID</label>
                    <input type="text" class="form-control" name="exercise_id" value="{{ $question['exercise_id'] }}" required>
                </div>                
                <div class="form-group">
                    <label for="">Question Topic</label>
                    <input type="text" class="form-control" name="question_topic" value="{{ $question['question_topic'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">Question Description</label>
                    <input type="text" class="form-control" name="question_description" value="{{  $question['question_description'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">A</label>
                    <input type="text" class="form-control" name="qchoice1" value="{{  $question['qchoice1'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">B</label>
                    <input type="text" class="form-control" name="qchoice2" value="{{  $question['qchoice2'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">C</label>
                    <input type="text" class="form-control" name="qchoice3" value="{{  $question['qchoice3'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">D</label>
                    <input type="text" class="form-control" name="qchoice4" value="{{  $question['qchoice4'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">Correct Answer</label>
                    <input type="text" class="form-control" name="correctanswer" value="{{  $question['correctanswer'] }}" required>
                </div>
                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-dark">
                    <a href="{{ URL::previous() }}" class="btn btn-warning">Go Back</a>
                </div>
            </div>
        </div>        
    </div>
</form>

@endsection