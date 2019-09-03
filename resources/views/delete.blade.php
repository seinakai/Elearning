@extends('layouts.app')
@section('content')
    <div class="container col-sm-10 md-10 lg-10 ">
        <div class="row">
            <a class="py-4 mt-4 text-center" style="font-size:30px;">Are you sure you want to delete the account?
            </a>
        </div>
        <div class="row">
            <a href="/welcome" class="btn btn-danger" style="margin-top:150px;">Delete</a>
            <a href="/home" class="btn btn-primary" style="margin-top:150px; margin-left:500px;">Return</a>
        </div>
    </div>
@endsection