@extends('layout')

@section('title','Projects')
    
@section('content')

    <h1 class="title is-inline-block">{{$project->title}}</h1> 
      
    <a class="button is-link is-outlined" href="/projects/{{$project->id}}/edit">edit</a>

    <div>{{$project->description}}</div>

    @if($project->tasks->count())
    <h2 class="subtitle">Tasks</h2>
        @foreach ($project->tasks as $task)
            <form method="POST" action="/tasks/{{$task->id}}">
                @csrf
                @method('PATCH')
                <div class="field">
                    <div class="control">
                        <label for="completed" class="checkbox {{ $task->completed ? 'is-complete': '' }}">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked': '' }}>
                            {{$task->description}}
                        </label>
                    </div>
                </div>
            </form>
        @endforeach
    @endif


    
@endsection