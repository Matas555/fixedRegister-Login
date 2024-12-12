@extends('layouts.app')

@section('title','Comments')

@section('content')

@if (session('message'))
    <p><b>{{ session('message') }}</b></p>
@endif

    <p>A list of comments...</p>
    <ul>
        @foreach ($comments as $comment)
            <li><a href="{{route('comments.show',
            ['id' => $comment->id])}}">{{$comment->commenting}}</a></li>
        @endforeach
</ul>
<a href="{{ route('comments.create' )}}">Create Comment</a>
@endsection
