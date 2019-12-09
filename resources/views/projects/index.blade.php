@extends('projects.layout')

@section('content')
    
    <div class="box">
        <h1>Projects</h1>
    </div>

    <div class="box">
        <ul>
            @foreach($projects as $project)
                <li>
                    <a href="/projects/{{ $project->id}}">
                        {{ $project -> title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="box">
            <a  href="/" class="button is-success">
                Home
            </a>

            <a  href="/projects/create" class="button is-success">
                Create Projects
            </a>
    </div>

@endsection
