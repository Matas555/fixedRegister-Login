@extends('layouts.app')

@section('title','Post Details')

@section('content')
    <ul>
        <li>Post: {{ $post->post_content}}</li>
        <li>Song id: {{$post->song_id}}</li>
</ul>

    <form method="POST"
        action="{{ route('posts.destroy', ['id' => $post->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <p><a href="{{ route('posts.index') }}">Back</a></p>

@endsection
