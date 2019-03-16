@extends('layout')

@section('content')
    <h1>Laravel from Scratch</h1>
    <div class="is-fullhd">
        <ul>
        @foreach ($tasks as $task)
            <li> {{$task}} </li>
        @endforeach

        This is a {{$foo}}!
        </ul>
    </div>
@endsection