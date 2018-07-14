<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active"
           data-toggle="tab"
           href="#asGuest"
           role="tab"
           aria-controls="home"
           aria-selected="true">Просто записаться</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"
           data-toggle="tab"
           href="#asUser"
           role="tab"
           aria-controls="home"
           aria-selected="false">Зарегистрироваться</a>
    </li>
</ul>
<div class="tab-content">
    <div id="asGuest" class="tab-pane fade show active" role="tabpanel">
        <div class="row">
            <div class="col-sm-6">
                @formGroup('start_time')
                {!! Form::formText('name', 'Имя') !!}
                @endFormGroup
            </div>
            <div class="col-sm-6">
                @formGroup('start_time')
                {!! Form::formText('surname', 'Фамилия') !!}
                @endFormGroup
            </div>
            <div class="col-sm-6">
                @formGroup('start_time')
                {!! Form::formText('email', 'Электронная почта') !!}
                @endFormGroup
            </div>
            <div class="col-sm-6">
                @formGroup('start_time')
                {!! Form::formText('phone', 'Телефон') !!}
                @endFormGroup
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="accept" />
                    <label class="form-check-label" for="accept">Подтверждаю, что ознакомлен(-а) с информацией и готов(-а) в случае приобретения раннего билета произвести оплату на карту ПриватБанка.</label>
                </div>
            </div>
        </div>
        <hr/>
        {!! Form::formSave() !!}
    </div>
    <div id="asUser" class="tab-pane fade">
        <div class="row">
            <div class="col-sm-6">
                @formGroup('start_time')
                {!! Form::formText('email', 'Электронная почта') !!}
                @endFormGroup
            </div>
            <div class="col-sm-6">
                @formGroup('start_time')
                {!! Form::formText('email', 'Пароль') !!}
                @endFormGroup
            </div>
            <div class="col-sm-6">
                @formGroup('start_time')
                {!! Form::formText('email', 'Подтверждение пароля') !!}
                @endFormGroup
            </div>
            <div class="col-sm-6">
                @formGroup('start_time')
                {!! Form::formText('phone', 'Телефон') !!}
                @endFormGroup
            </div>
            <div class="col-sm-6">
                @formGroup('start_time')
                {!! Form::formText('name', 'Имя') !!}
                @endFormGroup
            </div>
            <div class="col-sm-6">
                @formGroup('start_time')
                {!! Form::formText('surname', 'Фамилия') !!}
                @endFormGroup
            </div>
        </div>
    </div>
</div>