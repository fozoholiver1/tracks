<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller

{  public function create()
    {
        return view('contact.create');
    }


    public function store( )
    {
        $data=request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            ]);
            Mail::to('test@test.com')->send(new ContactFormMail($data)); //passing data to our maillable class
            return view('/contact')->with('message',' Thanks for your message We will be in touch');
        }

}
