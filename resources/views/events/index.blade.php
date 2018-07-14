@extends('_layouts.default')

@section('content')
    {!! Form::formCreate('events.create') !!}
    @foreach($events as $event)
        @include('events._partials._brief_view', $event)
        <br/>
    @endforeach
@stop
