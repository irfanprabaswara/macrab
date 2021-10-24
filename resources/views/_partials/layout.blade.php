<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
<<<<<<< HEAD
    <title>@yield('title', 'Macrab') - Management Core Agile Borneo</title>
    {{-- @yield('title', 'NARAYANA') - {{ env('APP_NAME') }} --}}
    <title>Macrab - Management Core Agile Borneo Dashboard</title>
=======
<<<<<<< HEAD
    <title>@yield('title', 'Macrab') - Management Core Agile Borneo</title>
=======
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- <title>@yield('title', 'NARAYANA') - {{ env('APP_NAME') }}</title> -->
    <title>Macrab - Management Core Agile Borneo Dashboard</title>
    
>>>>>>> c85133a4c471b4eac74155f5af7c3b7d7d5b054b
>>>>>>> 9e7361c1284ec1ddef356efb6a7487fd47e1fb1f
    {{-- css --}}
    <!-- Styles DILAYOUT-HEAD (V)-->
    <!-- Theme Styles DILAYOUT-HEAD (V)-->
    @include('_partials.head')
    @yield('head')
</head>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9e7361c1284ec1ddef356efb6a7487fd47e1fb1f
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        @include('_partials.menu')
        @include('_partials.side')
        @yield('body')
        {{-- @include('_partials.foot') --}}
        @include('sweetalert::alert')
=======

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <!-- INI MENU KIRI DILAYOUT-SIDE (V) -->
        @include('_partials.side')

        
        <div class="app-container">
            <!-- INI MENU ATAS DILAYOUT-MENU (V)-->
            @include('_partials.menu')        
            
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                               <h1>@yield('page_title')</h1>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="container">
                    @yield('page_content')
                </div>   
            </div>
        </div>
        
        <!-- INI BAGIAAN JAVA DILAYOUT-JAVA -->
        @include('_partials.java')
        @yield('java')

>>>>>>> c85133a4c471b4eac74155f5af7c3b7d7d5b054b
    </div>
</body>
</html>
