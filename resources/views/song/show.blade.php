@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid  white" style=" height:210px; font-weight:bold ; background-size:cover; opacity:3;
background-image:url('/logo.png')">
    <div class="container">
      <h3 class="display-6  capitalise text-center" > this page is dedicated to {{ $artist->artist_name }}</h3>
      <p class="lead"> play songs and follow the download link to download.
      </p>
    </div>
  </div>

<div class="row "   style=" background-color:palevioletred;  background-size:cover;">
        @foreach ($songs as $song)
                <div class="col  col-sm-1 col-md-2 col-lg-4 col-xl-3 ">
                                <div class=" ">
                                        <img src="/storage/{{ $artist->image }}" alt="no artist image " class=" w-100">
                                        <p class=" white capitalise  btn-dark" >{{ $song->artist_name }}</p>
                                        <p class=" white capitalise"> Song title {{ $song->title }}</p>
                                        <audio src="/storage/{{ $song->song }}" controls></audio>
                                     <a href="/storage/{{ $song->song }}" download="{{ $song->title }}">
                                         <audio src="/storage/{{ $song->song }}" ></audio> <button class="btn  btn-success">download</button>
                                     </a>

                                     {{--  can be seen only by the administrator  --}}
                                     @can('admin-only', Auth::user())

                                     <form action="/songs/{{ $song->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class=" btn bg-dark white capitalise" type="submit">delete song</button>
                                    </form>
                                    @endcan
                                    </div>
                            </div>
                                @endforeach
                            </div>
                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center">
                                                {{ $songs->links() }}
                                            </div>


</div>
</div>
@endsection
