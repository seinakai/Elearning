<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Notifications\Notifiable;

use Auth;
use App\User;

class UserController extends Controller
{
    public function follow($id)
    {
        Auth::user()->following()->attach($id);

        return redirect()->back();
    }
    public function unfollow($id)
    {
        Auth::user()->following()->detach($id);

        return redirect()->back();

    }

    
     public function followers($userId){

        $followers = User::find($userId)->followers;

        
        return view('followers',compact('followers'));
    }

    public function following($userId){

        $following = User::find($userId)->following;

        return view('followusers',compact('following'));
    }

    
    public function index()
    {
        $users = User::all();
        return view('index',compact('users'));
    }
    
    public function userprofile($id)
    {

       $user =  User::where("id" , $id)->first();
    

        return view('userprofile', compact('user'));
    }
    

    public function edit()
    {

        return view('editprofile');
    }

    public function update()
    {

        $avatar_name = time().'_'.Auth::user()->id.'.'.request()->avatar->getClientOriginalExtension();


        request()->avatar->storeAs('public/avatars',$avatar_name);

        $user = Auth::user();

        Auth::user()->avatar = $avatar_name;
        Auth::user()->save();

        Auth::user()->update([

            'name' => request()->name,
            'email' => request()->email,
            'avatar' => request()->avatar

            ]);
            return redirect('/dashboard');
    }

    public function confirm()
    {
        return view('delete');
    }


    public function delete()
    {
        $user = Auth::user()->delete();

        return redirect('/login');

    }
}