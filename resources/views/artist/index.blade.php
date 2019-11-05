@extends('layouts.app')

@section('content')
<div class="container">
        <div class="jumbotron jumbotron-fluid bg-warning">
                <div class="container">
                  <h1 class="display-4 "> welcome to tracks list page</h1>
                  <p class="lead"> Here you will be able to search and download any file you want if you want to play then click the play button</p>
                </div>
              </div>

    <div class="row">
        @foreach ($artists as $artist)
        <div class="pt-4 col-4   col-sm-2 col-md-4  col-lg-3 col-xl-3  ">
            <div >
                <img src="/storage/{{ $artist->image }}" alt="no artist image " class=" w-100 img-fluid  img-thumbnail">
            </div>

           <p> {{ $artist->artist_name  }}</p>

           <div>
               <a href="/songs/{{ $artist->id }}"> <button class=" btn btn-warning ">want to play/download songs??</button></a>
           </div>


           <div>
                <a href="/a/{{ $artist->id }}/edit"> <button class=" btn btn-warning">update this artist details</button></a>
           </div>


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
