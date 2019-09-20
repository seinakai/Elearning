@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row">
      <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-2">
                    <div class="panel user-list">
                        <div class="panel-heading p-4">
                            <h2>Followers</h2>
                            <div class="pull-right"> </div>
                        </div>

                        <div class="panel-body">
                            <div class="list-group p-4">
                            @foreach($followers as $user)
                              @if($user->id != Auth::user()->id)
                                <div class="list-group-item mb-1"> 
                                    <form class=" d-flex align-items-center" method="post" action="#">
                                        <img src="/storage/avatars/{{$user->avatar}}" class="rounded-circle" style="width:50px;height:50px;">
                                        <a class="pl-3" href="/userprofile/{{$user->id}}">{{$user->name}}</a>
                                        @if(Auth::user()->is_following($user->id))
                                        <div class="ml-auto">
                                            <a href="/user/unfollow/{{$user->id}}" class="btn btn-danger"> Unfollow </a>
                                        </div>
                                        @else
                                        <div class="ml-auto">
                                            <a href="/user/follow/{{$user->id}}" class="btn btn-primary"> Follow</a>
                                        </div>
                                        @endif
                                        
                                    </form>
                                </div>
                              @endif
                            @endforeach  
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
      </div>
    </div>
@endsection