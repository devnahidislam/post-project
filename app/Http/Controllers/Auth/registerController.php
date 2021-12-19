<?php

namespace App\Http\Controllers\Auth;

use APP\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $req){
        //validation
        $this->validate($req, [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'username' => 'required|max:30',
            'password' => 'required|confirmed|min:6',
        ]);
    }  

        
    
}
