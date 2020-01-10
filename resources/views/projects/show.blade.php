@extends('layout')

@section('content')

    <h1 class="title"> {{ $project->title }} </h1>

    <div class="content">
        {{ $project->description }}
    </div>

    @if($project->tasks->count())

    <div class="box">
        
        @foreach( $project->tasks as $task)

        <form  method="POST" action="/completed-tasks/{{ $task->id }}">

            @if($task->completed)

                @method('DELETE')

            @endif

            @csrf
                <label class="checkbox {{ $task->completed ? 'is-success' : '' }}" for="completed"> 

                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }} /> 
                    
                    {{ $task->description }} 

                </label>
            </form>
    
        @endforeach

    </div>
    @endif

    {{-- add a new task form --}}

    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
        
        @csrf
        <div class="field">

            <label for="label" for="description">New Task</label>

            <div class="control">

                <input type="text" class="input" name="description" placeholder="New task">

            </div>

        </div>

        <div class="feild">

            <div class="control">

                <button type="submit" class="button is-link">Add Task</button>

            </div>

        </div>

        @include ('errors')

    </form>


@endsection