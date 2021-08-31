@extends('layout')

@section('title', 'Books')

@section('content')
    <a class="btn btn-primary" role="button" href="{{ route('books.create') }}">Add book</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Book title</th>
                <th scope="col">Short Description</th>
                <th scope="col">Author</th>
                <th scope="col">Release date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
            <tr>
                <th scope="row">{{ $book->id }}</th>
                <td><img src="{{ $book->img }}" alt=""></td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->releasedate }}</td>
                <td>
                    <a type="button" class="btn btn-warning" href="{{ route('books.edit', $book->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
@endsection
