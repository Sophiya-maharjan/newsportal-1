<?php

namespace App\Http\UserControllers;

use Illuminate\Http\Request;
use App/User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users=User::all();
        print_r($user);
        die();
        return view('home', compact('users'));

    }
    
       

}
