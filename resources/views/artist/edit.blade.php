@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload New artist </div>

                <div class="card-body">
                    <form method="POST" action="/a/{{ $artist->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="artist_name" class="col-md-4 col-form-label text-md-right">Artist Name </label>

                            <div class="col-md-6">
                                <input id="artist_name" type="text"
                                class="form-control @error('artist_name') is-invalid @enderror" name="artist_name"
                                value="{{ old('artist_name') ?? $artist->artist_name }}"  autocomplete="artist_name" autofocus>

                                @error('artist_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right"> artist image </label>

                            <div class="col-md-6">
                                <input id="image" type="file"
                                class="form-control @error('image') is-invalid @enderror"
                                 name="image" value="{{ old('image') ?? $artist->image}}"
                                  autocomplete="image">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
