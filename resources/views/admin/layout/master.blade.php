<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.style')
</head>
<body class="sb-nav-fixed">
@include('admin.layout.navbar')
<div id="layoutSidenav">
    @include('admin.layout.header')

    @yield('content')
</div>
@include('admin.layout.script')
</body>
</html>
