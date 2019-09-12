@extends('layouts.app')
@section('content')

<form action="/createlesson" method="POST">
    @csrf
    <div class="container">
        <div class="col-sm-6 col-md-6 col-lg-6">
                <h1>
                    Create lesson page
                </h1>
                <br>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="text4a">Lesson title</label>
                        <input type="text" name="lessonTitle" class="form-control" id="text4a" placeholder="lesson title">
                        <br>
                        
                <label for="text4a">Lesson sentense</label>
                <textarea rows="4" cols="50" placeholder="About lesson" name="description"></textarea>
            <br>
            </div>
                </div>
                <div class="row">
                <input type="submit" class="btn btn-success" value="Submit">
            </div>
        </div>
    </div>
</form>
@endsection