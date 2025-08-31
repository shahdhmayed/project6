 <!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body>

    @include('layout.header')

    <div class='content'>
        @yield('content')
    </div>

    @include('layout.footer')
    @include('layout.foot')

</body>
</html>