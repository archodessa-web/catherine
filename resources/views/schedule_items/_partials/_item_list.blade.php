@foreach($scheduleItems as $scheduleItem)
    @include('schedule_items._partials._brief_view', $scheduleItem)
    <br/>
@endforeach