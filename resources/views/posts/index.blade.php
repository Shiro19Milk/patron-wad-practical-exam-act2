@extends('layouts.app')

@section('content')
    <h1>Your Posts</h1>
    <a href="{{ route('posts.create') }}">Create Post</a>
    
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection