<?php

Form::macro('formText', function($id, $label, $options = array()) {
    return Form::label(
            $id,
            $label,
            ['class' => 'form-check-label']
        )
        . Form::text(
            $id,
            Input::old($id),
            array_merge(['class' => 'form-control', 'placeholder' => $label . '...'], $options)
        );
});

Form::macro('formDate', function($id, $label, $options = array()) {
    return Form::label(
            $id,
            $label,
            ['class' => 'form-check-label']
        )
        . Form::date(
            $id,
            Input::old($id),
            array_merge(['class' => 'form-control', 'placeholder' => $label . '...'], $options)
        );
});

Form::macro('formNumber', function($id, $label, $options = array()) {
    return Form::label(
            $id,
            $label,
            ['class' => 'form-check-label']
        )
        . Form::number(
            $id,
            Input::old($id),
            array_merge(['class' => 'form-control', 'placeholder' => $label . '...'], $options)
        );
});

Form::macro('formTime', function($id, $label, $options = array()) {
    return Form::label(
            $id,
            $label,
            ['class' => 'form-check-label']
        )
        . Form::time(
            $id,
            Input::old($id),
            array_merge(['class' => 'form-control', 'placeholder' => $label . '...'], $options)
        );
});

Form::macro('formTextarea', function($id, $label, $options = array()) {
    return Form::label(
            $id,
            $label,
            ['class' => 'form-check-label']
        )
        . Form::textarea(
            $id,
            Input::old($id),
            array_merge([
                'class' => 'form-control editor',
                'placeholder' => $label . '...'
            ], $options)
        );
});

Form::macro('formSave', function($label = 'Сохранить', $options = array()) {
    return Form::submit(
        $label,
        array_merge(['class' => 'btn btn-primary'], $options)
    );
});

Form::macro('formBack', function($route, $label = 'Сохранить') {
    if (is_string($route)) {
        $route = [$route];
    }
    return '<a class="btn" href=' . URL::route($route[0], count($route) > 1 ? $route[1] : []) . '>' .$label . '</a>';
});

Form::macro('formBack', function($route, $label = 'Назад') {
    if (is_string($route)) {
        $route = [$route];
    }
    return '<a class="btn" href=' . URL::route($route[0], count($route) > 1 ? $route[1] : []) . '>' .$label . '</a>';
});

Form::macro('formCreate', function($route, $label = 'Создать') {
    if (is_string($route)) {
        $route = [$route];
    }
    $url = URL::route($route[0], count($route) > 1 ? $route[1] : []);
    return '<a class="btn btn-success" href=' . $url . '>' .$label . '</a>';
});

Blade::directive('formGroup', function ($expression) {
    return "<div class=\"form-group<?php echo \$errors->has($expression) ? ' has-error' : '' ?>\">";
});

Blade::directive('endFormGroup', function ($expression) {
    return '</div>';
});

Blade::directive('card', function ($expression) {
    return '<div class="card"><div class="card-body">';
});

Blade::directive('endCard', function ($expression) {
    return '</div>';
});