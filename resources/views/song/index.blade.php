@extends('layouts.app')

@section('content')
<div class="container">
        <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4">Fluid jumbotron</h1>
                  <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                </div>
              </div>
    <div class="row">

        <p>{{ $artist->song->title }}</p>
               @foreach ($artist->songs as $song)
            <a href="/storage/{{ $song->song }}" download="{{ $song->title }}">
                <audio src="/storage/{{ $song->song }}" ></audio> <button class="btn btn-primary">download</button>
            </a>
            <a href="/songs/{{ $song->id }}" >
                <button class="btn btn-primary">play</button>
            </a>

        </div>
        @endforeach

</div>
@endsection
