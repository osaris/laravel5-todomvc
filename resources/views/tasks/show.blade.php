@extends('layout')

@section('content')
    <h2>Task #{{ $task->id }}</h2>
    
    Name : {{ $task->name }}
@endsection