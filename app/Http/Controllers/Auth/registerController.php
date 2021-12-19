<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
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

        $data = $req->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in successfully');
    }  

    public function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
      ]);
      return redirect("dashboard")->withSuccess('You have signed-in successfully');
    }
    
    //return $req;
        //dd($req);
        
        // User::create([
        //     'name' => $req->name,
        //     'email' => $req->email,
        //     'username' => $req->username,
        //     'password' => Hash::make($req->password),
        // ]);

        
        //return redirect()->route('/dashboard');

        //store the user in the database
        //Sign in the user
        //redirect page
    
}
