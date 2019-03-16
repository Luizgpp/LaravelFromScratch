@extends('layout')

@section('title','Projects')
    
@section('content')

    <h1 class="title">Edit this Project</h1>   

<form method="POST" action="/projects/{{$project->id}}" style="margin-bottom: 10px;">
        @csrf
        @method('PATCH')
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
              <input class="input {{$errors->has('title') ? 'is-danger' : ''}}" type="text" name="title" placeholder="Title" value="{{$project->title}}" >
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea class="textarea {{$errors->has('description') ? 'is-danger' : ''}}" name="description" placeholder="Project Description" >{{$project->description}}</textarea>
            </div>
        </div>
        @if ($errors->any())
            <div class="notification is-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif
        <div class="field">
            <div class="control">
                <button class="button is-link is-outlined">Update!</button>
            </div>
        </div>
    </form>

    <form action="/projects/{{$project->id}}" method="post">
        @csrf
        @method('DELETE')
        <div class="field">
            <div class="control">
                <button class="button is-outlined">Delete!</button>
            </div>
        </div>
    </form>

@endsection