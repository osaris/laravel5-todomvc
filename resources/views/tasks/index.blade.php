@extends('layout')

@section('menu')
    Test4
@endsection

@section('content')
    <h2>Active tasks</h2>
    
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">New task</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
            </tr>            
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td><a href="{{ route('tasks.show', $task) }}">{{ $task->name }}</a></td>
            </tr>     
            @endforeach
        </tbody>
    </table>
@endsection