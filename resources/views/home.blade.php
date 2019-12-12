@extends('layouts.app')

@section('content')
<div class="container">
    {{--  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                   <div>
                  <button class=" btn   btn-outline-success">
                    <a href="/a/{{ $user->id }}"> see your default artist </a>
                  </button>
                   </div>
                </div>
            </div>
        </div>
    </div>  --}}

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal"> Welcome</h1>
      <p class="lead font-weight-normal" > In order to use this site effectively,read the follwing instructions carefully.
          we encorage you to first of all read the instructions before using this website.
      </p>
      <a class="btn btn-outline-secondary" href="/a/all">Choose song to play</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block">
        <p class=""> If you already went through the instructions click the link above.</p>
    </div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block">
        <p> God bless you!!!</p>
         </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 pt-5">
    <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5 capitalise"> purpose</h2>
        <p class="lead"> See which content is accepted.</p>
      </div>

      <div class="bg-light shadow-sm mx-auto pt-1 h3" style="color: #000; width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
           <p>
               This wedsite is aimed at enriching lives with Christain gosple music. please
               only audio file are accepted for the while,we have limitted stotage,you account maybe deleted for illregularities,and in case of
               anything be it on how to improve the website or bugs please use the contact form God bless You.
           </p>
      </div>
    </div>
    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Creating an artist</h2>
        <p class="lead">follow these instructions to create an artist.</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto white" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <p class=" pt-5 h3" > To create an artist go to the create the link <u>"artist link "</u> above and create one.
                    you will need to Know the name of the Artist and have an image of the artist
                </p>
      </div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 pt-5">
    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5 capitalise">Uploading a song</h2>
        <p class="lead">Follow these instructions to uplaod songs.</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; color: white; height: 300px; border-radius: 21px 21px 0 0;">
         <p class="pt-5 h3"> Click the "create song" link and create your song.
             if the artist dosent exits in the altist list you have to craete one before creating a song for that artist</p>
      </div>
    </div>
    <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Administrator </h2>
        <p class="lead">What can an Admin do?.</p>
      </div>
      <div class="bg-light shadow-sm mx-auto " style="width: 80%; height: 300px; color: green; border-radius: 21px 21px 0 0;">
          <p class="pt-5 h3"> If you can see the admin link that means you ar an administrator of this website.
              You can delete songs or user equally have acess to the admins page</p>
      </div>
    </div>
  </div>
  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 pt-5 ">
    <div class="  bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden white">
      <div class="my-3 p-3">
        <h2 class="display-5 capitalise">updating Artist details</h2>
        <p class="lead">Follow these instructions to update and artist.</p>
      </div>
      <div class=" bg-light shadow-sm mx-auto" style="width: 80%; color: #000000; height: 300px; border-radius: 21px 21px 0 0;">
         <p class="pt-5 h3">
             click on the update artist link to either change the name or the image of the said artist.
         </p>
      </div>
    </div>
    <div class="bg-danger mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5 capitalise">deleate artist </h2>
        <p class="lead">Follow these instructions to delete an artist.</p>
      </div>
      <div class="bg-light shadow-sm mx-auto " style="width: 80%; height: 300px; color: brown;  border-radius: 21px 21px 0 0;">
          <p class="pt-5 h3">
              Only admins have this privillage,they are permitted to delete an artist if her content is not christain related.
          </p>
      </div>
    </div>
  </div>

@endsection
