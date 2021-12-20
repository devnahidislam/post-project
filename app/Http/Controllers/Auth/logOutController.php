<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logOutController extends Controller
{
    public function store(){
        auth()->logOut();
        return redirect()->route('home');
    }
}
