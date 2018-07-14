<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
<div class="body">
    @include('_partials._header')

    <div class="container">
        @yield('content')
    </div>
</div>
</body>
</html>