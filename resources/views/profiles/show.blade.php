@extends('layouts.app')

@section('title','Profile Details')

@section('content')
    <ul>
        <li>Profile: {{ $profile->name}}</li>
</ul>

    <form method="POST"
        action="{{ route('profiles.destroy', ['id' => $profile->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <p><a href="{{ route('profiles.index') }}">Back</a></p>

@endsection
