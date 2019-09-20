@extends('layouts.app')

@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container col-sm-10 col-md-10 col-lg-10">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel user-profile">
                <div class="panel-body">
                    <div class="text-center">

                    <div class="row">
                        <img src="{{ asset('/storage/avatars')}}/{{$user->avatar}}" class="rounded-circle" style="width : 13vw; height:13vw; margin-left :-70px;">
                    </div>

                            </div>
                        </div>

                        <div class="py-2">
                            <h2>{{ $user->name }}</h2>
                        </div>

                        @if(Auth::user()->is_following($user->id))
                        <div class="ml-auto">
                            <a href="/user/unfollow/{{$user->id}}" class="btn btn-secondary"> Following </a>
                        </div>
                        @else
                        <div class="ml-auto">
                            <a href="/user/follow/{{$user->id}}" class="btn btn-primary"> Follow</a>
                        </div>
                        @endif


                        <div class="row mt-15 mt-4">
                            <div class="col-sm-6">
                            <strong><a href="/followingUsers/{{$user->id}}">{{$user->following()->count() }}</a></strong>
                                <div>following</div>
                            </div>
                            <div class="col-sm-6">
                                    <strong><a href="/followers/{{$user->id}}">{{$user->followers()->count() }}</a></strong>
                                <div>followers</div>
                            </div>
                        </div>

                    <div class="dropdown-divider my-4"></div>

                    <div class="media">
                        <div class="media-body">
                            <div class="btn-group btn-group-justified">
                                <div class="well text-center">
                                    <h4></h4>
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="activity-feed">
                <div class="well">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

