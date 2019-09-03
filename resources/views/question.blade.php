@extends('layouts.app')
@section('content')
  <div class="container col-sm-10 col-md-10 col-lg-10">
      <div class="row" href="">
            <h1>{{ $question->question_text }}
            </h1>
      </div>

  <form action="/nextquestion" method="post">
  @csrf
      @foreach ($choices as $key => $choice)

        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            {{ $choice->choice }}
          </label>
        </div>

      @endforeach

      <input type="hidden" name="questionId" value={{$question->id}}>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>


      <!-- this is relult -->
      <div class="row mt-4">
      <a href="/result" class="btn btn-secondary">Show result</a>

      </div>

  </div>
@endsection