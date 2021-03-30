@extends('base')

@section('title', 'Index Author')

@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">surname</th>
        <th scope="col">email</th>
        <th scope="col">Bio</th>
        <th scope="col">website</th>
        <th scope="col">pic</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($authors as $author )
        <tr>
          <th scope="row">{{$author->id}}</th>
          <td>{{$author->name}}</td>
          <td>{{$author->surname}}</td>
          <td>{{$author->email}}</td>
          <td>{{$author->detail->bio}}</td>
          <td>{{$author->detail->website}}</td>
          <td><img src="{{$author->detail->pic}}"></td>

        </tr>

        @endforeach

    </tbody>
  </table>
  @endsection
