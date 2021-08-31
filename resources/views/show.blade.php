@extends('layout')
@section('title', 'Book: ' .$book->title)

@section('content')
    <a type="button" class="btn btn-secondary" href="{{ route('books.index') }}">Back to books</a>
    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">id: {{$book->id}}</li>
            <li class="list-group-item">Book title: {{$book->title}}</li>
            <li class="list-group-item">Short description: {{$book->description}}</li>
            <li class="list-group-item">Author: {{$book->author}}</li>
            <li class="list-group-item">Release date: {{$book->releasedate}}</li>
        </ul>
    </div>
    <a type="button" class="btn btn-warning mt-3" href="{{ route('books.edit', $book) }}">Edit</a>
@endsection
