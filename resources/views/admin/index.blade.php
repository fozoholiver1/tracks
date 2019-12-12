@extends('layouts.app')
@section('title','Amin_home')

@section('content')
<div class="container">
<div class="card">
    <div class="card-header   bg-primary  white capitalized">
      Welcome to our admin page
    </div>
    <div class="card-body bg-success">
        <h5 class="card-title"> Sumarrily We have </h5>
        <div class=" d-flex  justify-content-between">
                <p class="card-text"> {{ $users->count() }} Users</p>
                <p class="card-text">{{ $artist->count() }} Artists</p>
                <p class="card-text">{{ $song->count()  }} Songs</p>
        </div>
    </div>
</div>
    <h1 class=" capitalise white fa-capsules" style=" align-text:center"> Users worksheet</h1>

      <table class="table table-dark ">
        <thead>
          <tr>
                <th scope="col capitalized white ">username</th>
                <th scope="col capitalized white ">email</th>
                <th scope="col capitalized white ">entry date</th>
                <th scope="col capitalized white ">Artist</th>
                <th scope="col capitalized white ">Songs</th>
                <th scope="col capitalized white ">delete</th>
          </tr>
        </thead>
        <tbody>
                @foreach ($users as $user)

                <tr>
                  <td> {{ $user->username }}</td>
                  <td> {{ $user->email }}</td>
                  <td> {{ $user->created_at }}</td>
                  <td> {{ $user->artists->count() }}</td>
                  <td> {{ $user->songs->count() }}</td>
                  <td> <form action="users/{{ $user->id }}" method="post">
                    @csrf
                    @method('DELETE')
                        <button class=" btn btn-warning " type="submit"> Delete User</a></button>
                </form> </td>
                </tr>

                @endforeach
        </tbody>
      </table>

</div>

</div>
@endsection
