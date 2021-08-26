<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function login(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return "Password or Email does not match";
        } else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    public function logout(){
        Session::forget('user');
        return redirect('/login');
    }
}
