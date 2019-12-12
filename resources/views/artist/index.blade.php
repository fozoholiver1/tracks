@extends('layouts.app')
@section('title','Artist_home')

@section('content')
<div class="container">
        <div class="jumbotron jumbotron-fluid   white" style=" height:210px; font-weight:bold ; background-size:cover; opacity:3;
         background-image:url('/logo.png')">
                <div class="container">
                  <h3 class="display-6  capitalise text-center" > welcome to our artists homepage</h3>
                  <p class="lead"> Choose your Artist and follow the link to either play or download song
                  </p>
                </div>
              </div>

    <div class="row" style="  background-color:none;">
        @foreach ($artists as $artist)
        <div class="pt-4    col-sm-2 col-md-4  col-lg-3 col-xl-3  ">
            <div >
                <img src="/storage/{{ $artist->image }}" alt="no artist image " class=" w-100 img-fluid  images img">
            </div>

           <p class=" capitalise  text-center white"> {{ $artist->artist_name  }}</p>

           <div class=" p-2 ">
               <a href="/songs/{{ $artist->id }}"> <button class=" btn btn-outline-dark btn-primary  white capitalise"> play/download songs </button></a>
           </div>

           @guest
           @else
                   <div class="">
                    <p class=" font-weight-bold white"> uploaded by <span class=" capitalise text-warning"> <u>{{ $artist->user->username }}</u></span> </p>
                   </div>

               <div  class=" pt-2">
                   <a href="/a/{{ $artist->id }}/edit"> <button class=" btn bg-secondary white capitalise">update this artist details</button></a>
               </div  class=" pt-2">

            @can('admin-only', Auth::user() )

            {{-- Delete for this artist --}}
            <form action="/a/{{ $artist->id }}" method="post">
             @csrf
             @method('DELETE')

                 <button class=" btn bg-danger white capitalise" type="submit">delete this artist details</button>


            </form>
            @endcan
           @endguest



        </div>

@endforeach
</div>
<div class="row">
    <div class="col-12 d-flex justify-content-center pt-5">
        {{ $artists->links() }}
    </div>
</div>
</div>
@endsection
