<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name','HCI')}}</title>
<link rel="stylesheet" href="{{('css/app.css')}}">
</head>
<body>

    @include('inc.navbar')

    @yield('content')
</body>
</html>