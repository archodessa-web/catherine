@extends('_layouts.default')

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($event, ['method' => 'put', 'route' => ['events.update', $event->id]]) !!}
                @include('events._partials._input_form')
            {!! Form::close() !!}
        </div>
    @include('schedule_items._partials._event_schedule', $event)
    </div>
@stop