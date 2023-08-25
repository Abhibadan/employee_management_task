<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User1;

class base extends Controller
{
    public function home() {
        return view('welcome');
    }
    public function user1() {
        return view('user1');
    }
    public function user1_request(Request $request) {
        $request->validate([
            'name'=>'required|min:5|max:20',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
        ]);
        $user=new User1();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return redirect(route('home'));
    }
    
}
