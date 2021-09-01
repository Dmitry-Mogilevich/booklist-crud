@extends('layout')
@section('title', isset($book) ? 'Update book ' .$book->title : 'Add Book')

@section('content')
    <a type="button" class="btn btn-secondary" href="{{ route('books.index') }}">Back to books</a>
    <form method="POST"
          @if(isset($book))
          action="{{ route('books.update', $book) }}"
          @else
          action="{{ route('books.store') }}"
          @endif
          class="mt-3">
        @csrf
        @isset($book)
            @method('PUT')
        @endisset
            <div class="row">
                <input
                    name="title"
                    value="{{ old('title', isset($book) ? $book->title : null) }}"
                    type="text"
                    class="form-control"
                    placeholder="Book title"
                    aria-label="book title">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mt-3">
                <input
                    name="author"
                    value="{{ old('author', isset($book) ? $book->author : null) }}"
                    type="text"
                    class="form-control"
                    placeholder="Author"
                    aria-label="author">
                @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mt-3">
                <textarea
                    name="description"
                    rows="8"
                    type="text"
                    class="form-control"
                    placeholder="Short description"
                    aria-label="short description">{{ old('description', isset($book) ? $book->description : null) }}</textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mt-3">
                <input
                    name="releasedate"
                    value="{{ old('releasedate', isset($book) ? $book->releasedate : null) }}"
                    type="date"
                    class="form-control"
                    placeholder="Release date"
                    aria-label="release date">
                @error('releasedate')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        <div class="col">
            <button type="submit" class="btn btn-success mt-3">Add</button>
        </div>
    </form>
@endsection
