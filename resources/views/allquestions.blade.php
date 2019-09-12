@extends('layouts.app')
@section('content')
<div class="container col-sm-11 col-md-11 col-lg-11">

    @foreach($questions as $question)
    
            <h4>{{$question->question_text}}</h4>
            <a href="/updatequestion/{{$question->id}}/" class="btn btn-primary">Edit
            </a>
    
    @endforeach

    <div>
    <a href="/newquestion/{{$categoryId}}" class="btn btn-warning">Create new questions</a>
    </div>
    <a href="/categories" class="btn btn-secondary">Return
    </a>


      
</div>  
      
@endsection