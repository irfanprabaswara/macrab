<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SmartDepo.id') - SmartDepo.id</title>
    {{-- css --}}
    @include('_partials.head')
    @yield('head')
</head>

@guest
<body class="hold-transition login-page">
@endguest

@auth
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
@endauth

    {{-- menu --}}
    @auth
        @include('_partials.menu')
        @include('_partials.side')
    @endauth

    {{-- content --}}

    @yield('body')
    {{-- foot --}}

    @auth
        @include('_partials.foot')
        </div>
    @endauth

    {{-- Java --}}
    @include('_partials.java')
    @yield('java')

</body>
</html>
