@extends('_layouts.default')

@section('content')
{{--    @include('schedule_items._partials._item_list', $scheduleItems)--}}
{!! $calendar->calendar() !!}
{!! $calendar->script() !!}
@stop