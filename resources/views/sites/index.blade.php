@extends('layout')

@section('content')
    <h1>Sites available</h1>
    
    @if ($sites->count())
        <ul>
            @foreach ($sites as $site)
                <li>
                    <p>{{ $site->url }}</p>
                </li>
            @endforeach
        </ul>
    @endif

@endsection