@extends('layouts.app')

@section('content')
<div>
    <h1>Heroes</h1>
    <a href="{{ route('heroes.create') }}">Add Hero</a>
    <ul>
        @foreach($heroes as $hero)
            <li>{{ $hero->title }} - {{ $hero->description }}</li>
        @endforeach
    </ul>
</div>
@endsection
