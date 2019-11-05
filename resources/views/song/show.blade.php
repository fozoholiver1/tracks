@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4">Fluid jumbotron</h1>
                  <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                </div>
              </div>
    <div class="row">


        @foreach ($songs as $song)
                <div class="col  col-sm-1 col-md-2 col-lg-4 col-xl-3 ">
                                <div class=" ">
                                        <img src="/storage/{{ $artist->image }}" alt="no artist image " class=" w-100">
                                        <p>{{ $song->artist_name }}</p>
                                        <p> Song title {{ $song->title }}</p>
                                        <audio src="/storage/{{ $song->song }}" controls></audio>
                                     <a href="/storage/{{ $song->song }}" download="{{ $song->title }}">
                                         <audio src="/storage/{{ $song->song }}" ></audio> <button class="btn btn-primary">download</button>
                                     </a>
                                    </div>
                                </div>
                                @endforeach

        </div>

</div>
</div>
@endsection
