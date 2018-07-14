<h1>
    <a class="btn btn-primary"
       href="{!! URL::route('events.edit', $event) !!}">
        <i class="fas fa-pencil-alt"></i> Edit
    </a>
    {{ $event->name }}
</h1>
<hr/>
<div>
    @isset($scheduleItem)
        Начал
    @endisset
    {!! $event->description !!}
</div>