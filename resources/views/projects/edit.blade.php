@extends('layout')

@section('title','Projects')
    
@section('content')

    <h1 class="title">Edit this Project</h1>   

<form method="POST" action="/projects/{{$project->id}}">
        @csrf
        @method('PATCH')
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
              <input class="input" type="text" name="title" placeholder="Title" value="{{$project->title}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea class="textarea" name="description" placeholder="Project Description">{{$project->description}}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link">Update!</button>
            </div>
        </div>
    </form>

@endsection