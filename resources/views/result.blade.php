@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row col-sm-8 col-md-8 col-lg-8">
            <h1>This is result page.
            </h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">
                        <th scope="col">Your choice</th>
                        <th scope="col">T or F</th>
                        <th scope="col">Correct answer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user_results as $key => $user_result)　
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$user_result->choice->choice}}</td>
                            <td>{{$user_result->choice->is_answer ? 'O' : 'X'}}</td>
                            <td>{{$user_result->answer}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/categories" class="badge badge-pill badge-primary">Lessons</a>
     
        </div>
    </div>
@endsection