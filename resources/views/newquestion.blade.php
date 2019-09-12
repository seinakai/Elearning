@extends('layouts.app')
@section('content')
<form action="/createnewquestion/{{$categoryId}}" method="post">
    @csrf
    <div class="col-sm-10 col-md-10 col-lg-10">
            <div class="container">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                            <h1>
                                Create new question page
                            </h1>
                            <br>
                                <div class="form-group">
                                  <label for="inputsm">Question text</label><br>
                                  <input class="form-control input-sm" 
                                         id="inputsm" 
                                         type="text" 
                                         name="questiontext"
                                         value="">
                                </div>
    
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="text4a">Correct answer</label>
                <input type="text" name="choices[correct]" class="form-control" id="text4a" placeholder="Correct">
                <br>
            </div>
            <div class="form-group col-sm-6">
                <label for="text4b">Falses</label>
                <input type="text" name="choices['false1']" class="form-control" id="text4b" placeholder="False1">
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-6">
                <label for="text4c"></label>
                <input type="text" name="choices['false2']" class="form-control" id="text4c" placeholder="False2">
            </div>
            <div class="form-group col-sm-6">
                <label for="text4d"></label>
                <input type="text" name="choices['false3']" class="form-control" id="text4d" placeholder="False3">
            </div>
            <button type="submit"  class="btn btn-success" style="margin-top:150px;">Submit</button>
            </div>
        </div>
    </div>
</form>
@endsection