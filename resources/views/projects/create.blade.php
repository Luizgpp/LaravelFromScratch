@extends('layout')

@section('title','Projects')
    
@section('content')

    <h1>Create a New Project</h1>   

    <form method="POST" action="/projects">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Project Title">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" cols="15" rows="5" placeholder="Project Description"></textarea>
        </div>
        <div>
            <button type="submit" value="">Create Project</button>
        </div>
    </form>

@endsection