<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Song;
use App\User;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    public function index(User $user){

        $user=auth()->user();
        return view('song.index',compact('artist'));
    }


    public function create(User $user){

        $artists=Artist::orderBy('artist_name')->get();

        return view('song.create',compact('user','artists'));
    }

    public function store(User $user){

          $data= request()->validate([//validation
                'artist_name'=>'required',
                'title'=>'required',
                'song'=>'',
            ]);

                $songpath=request('song')->store('songs','google'); //this will create an uploads link an directory in our
                //public directory

                $me=[ //saving  the uploads link and caption to db
                    'artist_name'=>$data['artist_name'],
                    'title'=>$data['title'],
                    'song'=>$songpath,
                ];
                // dd($me);
          auth()->user()->songs()->create($me);
                    // Song::create($me);
           //dd( request()->all());

           return redirect( '/a/all');
            }




            public function show(Artist $artist){


                $songs=Song::where( 'artist_name', '=', $artist->artist_name)->orderBy('created_at','DESC')->paginate(12);

                $user=auth()->user();

                return view('song.show',compact('user','artist','songs'));
            }
            public function destroy( Song $song){

                $song->delete();

                return redirect('/a/all');

             }


}
