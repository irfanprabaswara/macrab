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
    {{-- @yield('title', 'NARAYANA') - {{ env('APP_NAME') }} --}}
    <title>Macrab - Management Core Agile Borneo Dashboard</title>
    {{-- css --}}
    @include('_partials.head')
    @yield('head')
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        @include('_partials.menu')
        @include('_partials.side')
        @yield('body')
        {{-- <div class="modal fade" id="idle-modal" tabindex="-1" role="dialog" aria-labelledby="idle-modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Session Expiration Warning</h5>
                    </div>
                    <div class="modal-body">
                        <p>You've been inactive for a while. For your security, we'll log you out automatically. Click "Stay Online" to continue your session. </p>
                        <p>Your session will expire in <span class="bold" id="sessionSecondsRemaining">10</span> seconds.</p>
                    </div>
                    <div class="modal-footer">
                        <a href="sign-in.html" id="logoutSession" class="btn btn-secondary" data-dismiss="modal">Logout</a>
                        <a href="javascript:void(0);" id="extendSession" class="btn btn-success" data-bs-dismiss="modal">Stay Online</a>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- @include('_partials.foot') --}}
        @include('sweetalert::alert')
    </div>
    @yield('include')
    @include('_partials.java')
    @yield('java')
</body>
</html>
