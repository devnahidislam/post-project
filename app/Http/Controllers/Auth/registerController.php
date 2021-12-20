<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller{
    // public function __construct(){
    //     $this->middleware('guest');
    // }
    public function index(){
        return view('auth.register');
    }
    public function store(Request $req){
        dd($req->only('email', 'password'));
        //validation
        $this->validate($req, [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50|unique:users',
            'username' => 'required|min:5|max:30|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        //store the user in the database
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'username' => $req->username,
            'password' => Hash::make($req->password),
        ]);
        //Sign in the user
        auth()->attempt($req->only('email', 'password'));
        //redirect page
        return redirect()->route('dashboard')->withSuccess('You have signed-in successfully');
    }

}
