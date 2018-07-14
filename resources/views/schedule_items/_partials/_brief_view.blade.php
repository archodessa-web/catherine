<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            {{--<a href="{{ URL::route('events.show', $event) }}">{{ $event->name }}</a>--}}
            {{ $scheduleItem->date()->format('d F') }}
            <br/>
           {{ $scheduleItem->startTime()->format('G:i') }} - {{ $scheduleItem->endTime()->format('G:i') }}

            <a href="{!! URL::route('schedule_items.show', $scheduleItem) !!}">
                {{ $scheduleItem->event->name() }}
            </a>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            {!! $scheduleItem->start !!}
            {!! $scheduleItem->end !!}
            {!! $scheduleItem->attendant_limit !!}
            {!! $scheduleItem->early_price !!}
            {!! $scheduleItem->regular_price !!}
        </h6>
{{--        <a href="{{ URL::route('events.edit', $event) }}" class="card-link">Изменить</a>--}}
{{--        <a href="{{ URL::route('events.edit', $event) }}" class="card-link">Удалить</a>--}}
    </div>
</div>