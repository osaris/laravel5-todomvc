@extends('layout')

@section('content')
    <h2>@lang('tasks.new')</h2>

    <form method="POST" action="{{ route('tasks.store') }}">
        {{ csrf_field() }}
         <div class="form-group">
            <label for="name">@lang('tasks.name')</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="@lang('tasks.taskname')" value="{{ old('name') }}">
            {{ $errors->first('name') }}
        </div>
        <button type="submit" class="btn btn-primary">@lang('tasks.save')</button> <a href="{{ route('tasks.index') }}" class="btn btn-default">@lang('tasks.cancel')</a>
    </form>
@endsection