<?php

namespace App\Http\Controllers;

use App\Artist;
use App\User;

use Illuminate\Http\Request;
class ArtistController extends Controller
{

    public function index(User $user){
        $user=auth()->user();
       $artists=Artist::where('user_id', '>', 0)->orderBy('artist_name')->paginate(6);

            return view('artist.index',compact('user','artists'));
    }
    public function create(User $user){

        $user=auth()->user();
            return view('artist.create',compact('user'));
    }



    public function edit(Artist $artist ,User $user){

        $user=auth()->user();
            return view('artist.edit',compact('artist','user'));
    }




    public function store(User $user){
        //  public function store(){
            $data= request()->validate([//validation
                  'artist_name' => ['required', 'string', 'max:255'],
                  'image'=>['required','image'],
              ]);
            //   $image=Image::make(public_path("storage/{$imagepath}"))->fit(1200,1200);//image intervension library
            //   $image->save();

               $imagepath=request('image')->store('artist_images','public'); //this will create an uploads link an directory in our
              //public directory
              //dd($imagepath);
              //dd( request()->all());
            auth()->user()->artists()->create([ //saving  the uploads link and caption to db
                  'artist_name'=>$data['artist_name'],
                  'image'=>$imagepath,
              ]);
              //Post::create($data);


             return redirect( '/a/all');
    }


    public function update(Artist $artist ,User $user)
    {
        // $this->authorize('update',User::class);
        $data= request()->validate([//validation
            'artist_name' => ['required', 'string', 'max:255'],
                  'image'=>'',
        ]);


        if (request('image')) {
            $imagepath=request('image')->store('artist_images','public');//this will create an uploads link an directory in our public directory
        //     $image=Image::make(public_path("storage/{$imagepath}"))->fit(1200,1200);//image intervension library
        // $image->save();
        } else {
         $imagepath=$artist->image;
        }

       $myimage= ['image'=>$imagepath]; //asignning image to the image link

        $artist->update(array_merge(
            $data, $myimage,

        ));
//dd($user->id);
       // return redirect('/profiles/{$user->id}',compact('user'));
        return redirect( '/a/all');
    }
}
