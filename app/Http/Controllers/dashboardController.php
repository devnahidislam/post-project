<?php

namespace App\Http\Controllers;

use App\Mail\postLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class dashboardController extends Controller
{
    // public function __construct(){
    //     $this->middleware(['auth']);
    // }
    public function index(){

        //dd(auth()->user()->posts);
        return view('dashboard');
    }
}
