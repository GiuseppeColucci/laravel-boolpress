@extends('base')

@section('title', 'Index Create')

@section('content')

<form action="{{route ('post.store')}}" method="post"> {{-- rotta per lo store di PostController --}}
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="author_id">Autori</label>
        <select class="form-control" name='author_id'id="author_id">
            @foreach ($authors as $author )
            <option value="{{$author->id}}">{{$author->name}}{{$author->surname}}</option>

            @endforeach
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title-post" name='title' placeholder="inserisci titolo">
    </div>

    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" id="body" name='body' rows="6"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>



@endsection
