@extends('layouts.app')

@section('content')
<div>
    <h1>Footers</h1>
    <a href="{{ route('footers.create') }}">Add Footer</a>
    <ul>
        @foreach($footers as $footer)
            <li>{{ $footer->content }}</li>
        @endforeach
    </ul>
</div>
@endsection
