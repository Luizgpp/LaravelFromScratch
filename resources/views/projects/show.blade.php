@extends('layout')

@section('title','Projects')
    
@section('content')

    <h1 class="title is-inline-block">{{$project->title}}</h1> 
      
    <a class="button is-link is-outlined" href="/projects/{{$project->id}}/edit">edit</a>

    <div>{{$project->description}}</div>

    <h2 class="subtitle">Tasks</h2>

    <ul>
        @if($project->tasks->count())
            @foreach ($project->tasks as $task)
                <li>{{$task->description}}</li>    
            @endforeach            
        @endif
    </ul>

    
@endsection