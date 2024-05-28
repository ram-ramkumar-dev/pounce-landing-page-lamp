@extends('layouts.app')

@section('content')
<div>
    <h1>Add Hero</h1>
    <form action="{{ route('heroes.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="text" name="image" id="image">
        </div>
        <button type="submit">Add</button>
    </form>
</div>
@endsection
