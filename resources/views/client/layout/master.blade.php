<!DOCTYPE html>
<html lang="en">
<head>
    @include('client.layout.style')
</head>
<body>
    @include('client.layout.navbar')

    @yield('content')

    @include('client.layout.footer')
    @include('sweetalert::alert')
@include('client.layout.script')
</body>
</html>
