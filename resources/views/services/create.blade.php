@extends('layouts.app')

@section('content')
<div>
    <h1>Add Service</h1>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <button type="submit">Add</button>
    </form>
</div>
@endsection
