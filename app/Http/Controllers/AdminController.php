<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Song;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Artist $artist,User $user, Song $song){
$users=User::all();

        return view('admin.index',compact('users','artist','song'));
    }
    // we want to delete a user from our db
    public function destroy(User $user){
        $user->delete();
        return redirect('/A');
    }
}
