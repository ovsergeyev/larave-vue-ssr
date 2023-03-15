<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vue/Laravel SSR App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
</head>
<body>
{!! $ssr !!}
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
