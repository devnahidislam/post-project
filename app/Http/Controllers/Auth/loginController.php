<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('auth/login');
    }
    public function store(Request $req){
        //validation
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //Login the user
        if(!auth()->attempt($req->only('email', 'password'), $req->remember)){
            return back()->with('status', 'Invalid Password');
        }else{
            //Redirect to Dashboard
            return redirect()->route('dashboard');
        }
    }
}
