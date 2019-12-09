@extends('projects.layout')

@section('content')

    <h1 class='title'> Create projects </h1>
    <h1> Create New Projects </h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}

        <div class="field">
            <div class="control">
                <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('title') }}" required>
            </div>
        </div>

        <div class="field">
            <div>
                <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="text description" required>{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div>
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
        

        @if($errors->all())
            <div class="notification is-danger">
                <ul>
                    @foreach( $errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

@endsection