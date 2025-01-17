@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="body" placeholder="Body" required></textarea>
        <button type="submit">Post</button>
    </form>
@endsection