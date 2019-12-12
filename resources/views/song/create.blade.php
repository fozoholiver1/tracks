@extends('layouts.app')
@section('title','New_Song ')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark white capitalise">
                <div class="card-header">Upload New Song </div>

                <div class="card-body">

                    <form method="POST" action="/songs" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Song Title</label>

                        <div class="col-md-6">
                                <select name="artist_name" id="artist_name" class=" form-control">
                                        <option value="" disabled="disabled">select artist name</option>
                                        @foreach ($artists as $artist )
                                        <option value="{{ $artist->artist_name }}" >{{ $artist->artist_name  }}  </option>
                                        @endforeach
                                </select>
                                @error('artist_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Song Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="song" class="col-md-4 col-form-label text-md-right">song </label>

                            <div class="col-md-6">
                                <input id="song" type="file" class="form-control @error('song') is-invalid @enderror" name="song" value="{{ old('song') }}" required autocomplete="song">

                                @error('song')
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
