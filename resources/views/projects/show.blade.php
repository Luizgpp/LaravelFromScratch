@extends('layout')

@section('title','Projects')
    
@section('content')

    <h1 class="title">{{$project->title}}</h1>   
    <div class="content">{{$project->description}}</div>

    <a class="button" href="/projects/{{$project->id}}/edit">edit</a>
    
@endsection