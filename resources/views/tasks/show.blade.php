@extends('layout')

@section('content')
    <h2>@lang('tasks.task') #{{ $task->id }}</h2>
    
    <ul>
        <li>@lang('tasks.name') : {{ $task->name }}</li>
    </ul>
    
    <a href="{{ url()->previous() }}" class="btn btn-default">@lang('tasks.back')</a>
@endsection