@extends('app');

@section('content')

    <h1>About</h1>

    @if ($first == "Vitalii")
        <h1>Hello {{ $first }} {{ $last }}</h1>
    @else
        <h1>Hello someone else!</h1>
    @endif

    @if (count($people))
        <h3>People I like</h3>

        <ul>
            @foreach ($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif


@stop

