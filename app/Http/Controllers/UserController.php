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

    
     public function followers(){

        
        return view('followers',compact('users'));
    }

    public function following(){

        return view('followusers',compact('users'));
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
        // $avatar->imageurl = $repuest->image-> storeAs('avatar/avatar', $time.'_' Auth::user()->id.getClientOriginalExtension);

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


    public function delete($id)
    {
        $user =  Auth::user()->delete();

        return redirect('/welcome');

    }
}