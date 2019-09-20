@extends('layouts.app')
@section('content')
  <div class="container col-sm-10 col-md-10 col-lg-10">
      <div class="row">
            <h1>{{ $question->question_text }}
            </h1>
      </div>

  <form action="/{{$categoryTaken->id}}/nextquestion" method="post">
  @csrf
      @foreach ($choices as $key => $choice)

        <div class="form-check">
          <input class="form-check-input" type="radio" name="userschoice" id="exampleRadios1" value={{$choice->id}}>
          <label class="form-check-label" for="exampleRadios1">
            {{ $choice->choice }}
          </label>
        </div>

      @endforeach

      <input type="hidden" name="questionId" value={{$question->id}}>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>



  </div>
@endsection