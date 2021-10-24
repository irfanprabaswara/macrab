<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <title>@yield('title', 'Macrab') - Management Core Agile Borneo</title>
    {{-- css --}}
    @include('_partials.head')
    @yield('head')
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        @include('_partials.menu')
        @include('_partials.side')
        @yield('body')
        {{-- @include('_partials.foot') --}}
        @include('sweetalert::alert')
    </div>
    @yield('include')
    @include('_partials.java')
    @yield('java')
</body>
</html>
