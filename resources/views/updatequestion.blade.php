@extends('layouts.app')
@section('content')
<form action="/submitupdate/{{$question->id}}" method="post">
            @csrf
            <div class="container">
                <div class="col-sm-6 col-md-6 col-lg-6">
                        <h1>
                            Edit question page
                        </h1>
                        <br>
                        <form>
                            <div class="form-group">
                              <label for="inputsm">Question text</label><br>
                              <input class="form-control input-sm" 
                                     id="inputsm" 
                                     type="text" 
                                     name="questiontext"
                                     value="{{$question->question_text}}">
                            </div>
                          </form>
                        <div class="form-row">
                           @foreach($question->choices as $choice)
                                @if($choice->is_answer)
                                <div class="form-group col-sm-6">
                                    <label for="text4a">Correct answer</label>
                                    <input type="text" 
                                                    name="choices[{{$choice->id}}]" 
                                                    class="form-control" 
                                                    id="text4a" 
                                                    placeholder="Correct"
                                                    value="{{$choice->choice}}">
                                    
                                    <br>
                                </div>
                                @else
                                    <div class="form-group col-sm-6">
                                        <label for="text4a">False</label>
                                        <input type="text" 
                                                        name="choices[{{$choice->id}}]" 
                                                        class="form-control" 
                                                        id="text4a" 
                                                        placeholder="Correct"
                                                        value="{{$choice->choice}}">
                                        
                                        <br>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </div>
            </div>
        </form>

@endsection