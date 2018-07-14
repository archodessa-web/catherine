@extends('_layouts.default')

@section('content')
    @card
    @include('events._partials._full_view', [
        'event' => $scheduleItem->event,
        'scheduleItem' => $scheduleItem
    ])
    @endCard
@stop