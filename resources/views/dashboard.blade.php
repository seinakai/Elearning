@extends('layouts.app')

@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection


@section('content')
<div class="container　col-sm-10 col-md-10 col-lg-10" style="margin-left:100px;">
  <div class="row"> 
    <div class="col-md-2 col-lg-2 col-sm-2">
      <div class="row">
      <img src="{{ asset('/storage/avatars')}}/{{Auth::user()->avatar}}" class="rounded-circle" style="width : 13vw; height:13vw; margin-left :-70px;">
      <!-- {{ asset('/images')}}/default.jpeg -->
        <!-- <img src="{{Auth::user()->avatar}}" class="rounded-circle" style="width : 13vw; margin-left :-70px;"> -->
      </div>
      </div>
      <div class="col-lg-4 col-md-3 col-sm-3" style="margin-left : -50px;">
        <div class="row flex-wrap justify-content-left">
            <div>
          <h1>{{ Auth::user()->name }}</h1>
            </div>
        </div>
        <div class="row flex-wrap justify-content-left">
          <div class="col-sm-6 p-0 mt-2">
            <strong><a href="/followusers">{{Auth::user()->following()->count() }}</a></strong>
            <div>following</div>
            </div>
            <div class="col-sm-6 p-0 mt-2" style-="margin-bottom: 0px;">
            <strong><a href="/followers">{{Auth::user()->followers()->count() }}</a></strong>
            <div>followers</div>
          </div>
        </div>
        <div class="row flex-wrap justify-content-left" style="margin-top: 0px;">
            <a type="button" href="/editprofile" class="btn btn-primary" style="margin-top:60px;">Edit</a><br><br>
          </div>
        </div>


        <div class="col-sm-10 col-md-10 col-lg-10">
            <h1>
              {{Auth::user()->name}}'s activities
            </h1>
            @foreach($categories as $category)
            <span class="border border-primary row rounded " style="margin-top: 50px;">
              <h2>
                Date:
                <a style="width:500px; margin-top: 50px; font-size:20px; border:brown;">
                    {{$category->created_at}}
                    <br>
                Category:
                    {{$category->category->title}}
              </h2>
                </span>
              </a>
            @endforeach
                {{$categories->links()}}
        </div>

    </div>
  </div>
</div>
@endsection