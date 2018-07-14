<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ URL::route('events.show', $event) }}">{{ $event->name }}</a>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            {!! str_limit(strip_tags($event->description), 280) !!}
        </h6>
        <a href="#" class="card-link">График</a>
        <a href="{{ URL::route('events.edit', $event) }}" class="card-link">Изменить</a>
    </div>
</div>