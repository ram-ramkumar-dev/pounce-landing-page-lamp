@extends('layouts.app')

@section('content')
<div>
    <h1>Services</h1>
    <a href="{{ route('services.create') }}">Add Service</a>
    <ul>
        @foreach($services as $service)
            <li>{{ $service->name }} - {{ $service->description }}</li>
        @endforeach
    </ul>
</div>
@endsection
