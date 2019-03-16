@extends('layout')

@section('title','Projects')
    
@section('content')

    <h1 class="title">My Projects</h1>   

    <a href="/projects/create" class="button is-primary is-fullwidth is-outlined">New Project</a>
    
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{$project->id}}">
                    {{ $project->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection