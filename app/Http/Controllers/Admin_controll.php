<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\User1;
use Illuminate\Http\Request;

class Admin_controll extends Controller
{
    public function admin(){
        return view('admin');
    }

    public function user1_cart() {
        $users=User1::paginate(10);
        $data=compact('users');
        return view('user_cart')->with($data);
    }
    public function authenticate_admin(Request $request){
        $admin=admin::where('email','=',$request->email)->get();
        $record=$admin->toArray()[0];
        if(!empty($record)){
            if ($record['name']==$request->name && $record['email']==$request->email && $record['password']==$request->password){
                session(['email'=>$record['email']]);
                return redirect()->route('user1_cart');

            }
            else{
                return redirect(route('home'));
            }
        }
    }
    
    public function admin_logout(){
        session()->flush();
        return redirect(route('home'));
    }
}
