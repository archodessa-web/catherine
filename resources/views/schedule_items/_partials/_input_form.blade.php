{!! Form::hidden('event_id', $event->id) !!}

@formGroup('event_date')
{!! Form::formDate('event_date', 'Дата') !!}
@endFormGroup

@formGroup('start_time')
{!! Form::formTime('start_time', 'Начало') !!}
@endFormGroup

@formGroup('end_time')
{!! Form::formTime('end_time', 'Конец') !!}
@endFormGroup

@formGroup('attendant_limit')
{!! Form::formNumber('attendant_limit', 'Количество человек') !!}
@endFormGroup

@formGroup('early_price')
{!! Form::formNumber('early_price', 'Стоимость раннего билета', ['step' => '0.01']) !!}
@endFormGroup

@formGroup('attendant_amount')
{!! Form::formNumber('regular_price', 'Стоимость в день прогулки', ['step' => '0.01']) !!}
@endFormGroup

{!! Form::formSave() !!}
{{--{!! Form::formBack(['schedule_items.show', $event]) !!}--}}
</div>