@extends('_layouts.default')

@section('content')
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
{!! Form::open(['method' => 'post', 'route' => 'schedule_items.store']) !!}
    @include('schedule_items._partials._input_form', $event)
{!! Form::close() !!}
@stop