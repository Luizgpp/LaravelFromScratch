@extends('layout')

@section('title','Projects')
    
@section('content')

    <h1 class="title">Create a New Project</h1>   

    <form method="POST" action="/projects">
        @csrf
        <div class="field">
            <label class="label" for="title">Title</label>
            <input class="input {{$errors->has('title') ? 'is-danger' : ''}}" type="text" name="title" placeholder="Project Title" value="{{old('title')}}" required>
        </div>
        <div class="field">
            <label class="label" for="description">Description</label>
            <textarea class="textarea {{$errors->has('description') ? 'is-danger' : ''}}" name="description" cols="15" rows="5" placeholder="Project Description" required>{{old('description')}}</textarea>
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit" value="">Create Project</button>
            </div>
        </div>
        @if ($errors->any())
            <div class="notification is-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif
    </form>

@endsection