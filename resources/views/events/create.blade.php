@extends('_layouts.default')

@section('content')
{!! Form::open(['method' => 'post', 'route' => 'events.store']) !!}
    @include('events._partials._input_form')
{!! Form::close() !!}
@stop