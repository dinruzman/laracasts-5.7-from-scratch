@extends('projects.layout')

@section('content')

    <h1 class='title'>{{ $project->title }}</h1>
    <div class="box">
        <h1 class='content'>{{ $project->description }}</h1>

        <p>
            <a href="/projects/{{ $project->id}}/edit">Edit</a>
        </p>
    </div>

    @if($project->tasks->count())
        <div class="box">
            @foreach ($project->tasks as $task)
                <div>
                    <form method="POST" action="/completed-tasks/{{ $task->id }}">
                        @if($task->completed)
                            {{ @method_field('DELETE') }}
                        @endif

                        {{ csrf_field() }}
                        <label for="completed" class="checkbox">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
        {{ csrf_field() }}
        <div class="field">
            <label class="label" for="description">New Task</label>

            <div class="control">
                <input type="text" class="input  {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="New Task">
            </div>
        </div>

        
        <div class='field'>
                <div class="control">
                    <button type="submit" class="button is-link">New Task</button>
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

    <div class="box">
        <a  href="/projects" class="button is-success">
            Back
        </a>
    </div>
@endsection