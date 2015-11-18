@extends('layouts.master')

@section('content')

@include('layouts.partials.sidebar')
 <div class="col-sm-9">
    <h1 class="page-header"> Edit Task</h1>

    @include('layouts.partials.alerts')
    <div class="col-lg-9">
        <form class="form-vertical" role="form" method="post" action="{{ url('projects/' .$projectId .'/tasks/' . $task->id) }}">
            <div class="form-group{{ $errors->has('task_name') ? ' has-error' : '' }}">
                <input type="text" name="task_name" class="form-control" id="name" value="{!! $task->task_name ?: '' !!}">
                @if ($errors->has('task_name'))
                    <span class="help-block">{{ $errors->first('task_name') }}</span>
                @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-info">Update Task</button>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {!! method_field('PUT') !!}
        </form>
    </div>
</div>
@stop