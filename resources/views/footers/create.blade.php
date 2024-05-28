@extends('layouts.app')

@section('content')
<div>
    <h1>Add Footer</h1>
    <form action="{{ route('footers.store') }}" method="POST">
        @csrf
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content"></textarea>
        </div>
        <button type="submit">Add</button>
    </form>
</div>
@endsection
