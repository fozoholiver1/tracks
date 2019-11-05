<?php

namespace App\Http\Controllers;

use App\Artist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index(User $user,Artist $artist)
    {

        $user=Auth::User();//we want only the authenticated user here

        return view('home' ,compact('user','artist'));
    }
}
