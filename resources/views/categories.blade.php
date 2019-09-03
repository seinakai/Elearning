@extends('layouts.app')
@section('content')
<div class="container col-sm-11 col-md-11 col-lg-11">
  @foreach($categories as $category)

    <div class="card col-sm-4 mt-4 mb-4">
      <div class="card-body">
        <h4 class="card-title">{{$category->title}}</h4>
        <p class="card-text">
          {{$category->text}}
        </p>
        <a href="/category/{{$category->id}}/take" 
           class="btn btn-success {{$category->questions()->count() ?: 'disabled' }}"
           >Let's test!</a>
      </div>
    </div>
  @endforeach
</div>
@endsection