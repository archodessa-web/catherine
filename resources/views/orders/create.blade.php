@extends('_layouts.default')

@section('content')
    {!! json_encode($event) !!}

    @include('orders._partials._order_form')
@stop