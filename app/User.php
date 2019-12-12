<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function artists(){
        return $this->hasMany(Artist::class) ;
        // ->orderBy('created_at','DESC') ;
    }
    public function songs(){
        return $this->hasMany(Song::class) ;
        // ->orderBy('created_at','DESC') ;
    }
    public function admin(){
        return $this->hasOne(Admin::class);
    }


    //  protected static function boot()//we want to create a default profile for our users
    //  {
    //      parent::boot();
    //      static::created(function ($user){
    //          $user->artists()->create([

    //              'artist_name'=>'unknown',
    //             //'title'=>$user->username,
    //            // 'image'=>$user->username,
    //              'image'=>'artist_images/tadas-mikuckis-hbnH0ILjUZE-unsplash.jpg',
    //          ]);
    //     // Mail::to($user->email)->send(new NewUserWelcomeMail());
    //      });
    //  }

}
