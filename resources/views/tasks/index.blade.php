@extends('layout')

@section('menu')
    Test4
@endsection

@section('content')
    <span class="h2"><a href="{{ route('tasks.index') }}">@lang('tasks.active')</a></span> / 
    <span class="h3"><a href="{{ route('tasks.index', ['done' => true]) }}">@lang('tasks.done')</a></span>
    <div class="clearfix"></div>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">@lang('tasks.new')</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>@lang('tasks.name')</td>
                <td>@lang('tasks.created_at')</td>
                <td></td>
            </tr>            
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td><a href="{{ route('tasks.show', $task) }}">{{ $task->name }}</a></td>
                <td>{{ $task->created_at }}</td>
                <td>
                    @if(!$task->done)
                        <form method="POST" action="{{ route('tasks.update', $task) }}">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary">@lang('tasks.do')</button>
                        </form>
                    @endif
                </td>
            </tr>     
            @endforeach
        </tbody>
    </table>
    {{ $tasks->links() }}
@endsection