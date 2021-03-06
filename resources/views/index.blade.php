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
                <td><a href="{{ route('books.show', $book) }}"><img src="{{ $book->img }}"></a></td>
                <td>
                    <a href="{{ route('books.show', $book) }}">{{ $book->title }}</a>
                </td>
                <td>
                    {{ $book->description }}
                </td>
                <td>
                    <a href="{{ redirect('/') }}">{{ $book->author }}</a>
                </td>
                <td>{{ $book->releasedate }}</td>
                <td>
                        <form method="POST" action="{{ route('books.destroy', $book) }}">
                            <div class="row"><a type="button" class="btn btn-warning" href="{{ route('books.edit', $book->id) }}">Edit</a></div>
                            @csrf
                            @method('DELETE')
                            <div class="row mt-3"><button class="btn btn-danger" type="submit">Delete</button></div>
                        </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

    {{ $books->links() }}
@endsection
