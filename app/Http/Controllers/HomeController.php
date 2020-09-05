<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard($type)
    {
        //dd($type);
        $id = Auth::user()->id;
        $user = User::find($id);
        //dd($user);

        if($type=='Customer')
        {
            return view('customerdashboard' , ['userinfo'=> $user]);
            //return "customer";
        }
        else
        {
            return view('admindashboard', ['userinfo'=> $user]);
            //return "admin";
        }
        
    }
}
