<!DOCTYPE html>
<html>
<head>
    <title>Learn Authentication on Udemy</title>
</head>
<body>
    @if(Session::has('global'))
        <p>{{ Session::get('global') }}</p>
    @endif
    @include('layout.navigation')
    @yield('content')
</body>
</html>