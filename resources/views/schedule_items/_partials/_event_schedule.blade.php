<a class="btn btn-success" href="{{ URL::route('schedule_items.create', $event) }}">Создать</a>
<br/>
@include('schedule_items._partials._item_list', ['scheduleItems' => $event->scheduleItems])