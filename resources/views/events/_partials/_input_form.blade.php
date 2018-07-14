<fieldset>
    <legend>Правка события</legend>
    @formGroup('name')
    {!! Form::formText('name', 'Название') !!}
    @endFormGroup

    @formGroup('attendant_amount')
    {!! Form::formNumber('attendant_amount', 'Максимальное количество билетов', ['step' => '1']) !!}
    @endFormGroup

    @formGroup('early_price')
    {!! Form::formNumber('early_price', 'Цена раннего билета', ['step' => '0.01']) !!}
    @endFormGroup

    @formGroup('regular_price')
    {!! Form::formNumber('regular_price', 'Цена в день прогулки', ['step' => '0.01']) !!}
    @endFormGroup

    @formGroup('description')
    {!! Form::formTextarea('description', 'Описание', ['rows' => '20']) !!}
    @endFormGroup

    {!! Form::formSave() !!}
    {!! Form::formBack('events.index') !!}
</fieldset>

<script src="{{ mix('/js/editor.js') }}"></script>