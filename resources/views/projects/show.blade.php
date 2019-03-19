@extends('layout')

@section('title','Projects')
    
@section('content')

    <h1 class="title  has-text-centered">{{$project->title}}</h1> 
      
    <a class="button is-link is-outlined is-pulled-right is-inline" href="/projects/{{$project->id}}/edit">edit</a>

    <p class="has-text-justified">{{$project->description}}</p>

    @if($project->tasks->count())
        <div class="box">
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
        </div>
    @endif

    {{-- Add a new Task--}}

    <form action="/projects/{{$project->id}}/task" method="POST" class="box">
        @csrf
        <div class="field">
            <label for="description" class="label">New Task</label>
            <div class="control">
                <input class="input" type="text" name="description" placeholder="Description" required value="{{old('description')}}">
            </div>            
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-primary" type="submit" value="">Add New Task</button>
            </div>
        </div>
        @include('errors')
    </form>
    
@endsection