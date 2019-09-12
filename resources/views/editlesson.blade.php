@extends('layouts.app')
@section('content')

<form action="/categories" method="post">
    @csrf
    <div class="container">
        <div class="col-sm-6 col-md-6 col-lg-6">
                <h1>
                    Edit lesson page
                </h1>
                <br>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="text4a">Lesson title</label>
                    <input type="text" name="title" class="form-control" id="text4a" value="{{$category->title}}">
                        <br>
                        
                <label for="text4a">Lesson sentense</label>
                    <textarea name="text" rows="4" cols="50" placeholder="About lesson">{{$category->text}}</textarea>

                    <input name="category_id" type="hidden" value="{{$category->id}}">

                    
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/allquestions/{{$category->id}}" class="btn btn-warning">Go to questions</a>
                                    

        </div>
    </div>
</form>
@endsection