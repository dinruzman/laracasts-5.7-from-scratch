@extends('layout')
@section('title', 'Selamat Mampir')

@section('content')

    <h1>My First {{$foo}} Website</h1>
    <ul>
        @foreach ($tasks as $task)
        <li>
            {{$task}}
        </li>
        @endforeach
    </ul>

@endsection