@extends('layouts.app')
@section('content')

<div class="container" width="80%">
    <form action="/updateProfile" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="container">
            <div class="col-lg-2 col-md-2">
                <div class="row">
                    <img src="{{ asset('/storage/avatars')}}/{{Auth::user()->avatar}}" id="avatar" class="rounded-circle" style="width : 13vw; height:13vw; margin-left :-70px;">
                </div>
                <div clas="row">
                    <div class="custom-file" style="width:20vw; margin-top:50px;">
                        <input type="file" class="custom-file-input" name="avatar" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{Auth::user()->name}}"/>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{Auth::user()->email}}"/>
                </div>
                <div class="text-center">
                    <button class="create-post btn btn-primary" type="submit">Update</button><br><br><br><br><br>
                    <a class="pl-3" href="/delete">Delete Account</a>
                </div>
            </div>
        </div>

    </form>
</div>

@endsection
