<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'NARAYANA') - {{ env('APP_NAME') }}</title>
    {{-- css --}}
    @include('_partials.head')
    @yield('head')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed border-bottom-0 text-sm">
    <div class="wrapper">
        @include('_partials.menu')
        @include('_partials.side')
        @yield('body')
        @include('_partials.foot')
        @include('sweetalert::alert')
    </div>
    @yield('include')
    @include('_partials.java')
    @yield('java')
</body>
</html>
