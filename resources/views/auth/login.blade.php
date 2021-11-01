@extends('_partials.layout_login')
@section('title', $title)
@section('head')
@endsection

<body>
    <div class="container">
        <div style="background-image: url('/assets/images/macrabbg.png')">
        <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
                <div class="app-auth-container">
                        <div class="logo">
                            <a href="index.html">Macrab</a>
                        </div>
                        <p class="auth-description">Management Core Agile Borneo Dashboard.<br></p>
            
                        {!! Form::open(['url' => 'login', 'method' => 'post']) !!}
            
                        <div class="auth-credentials m-b-xxl">
                            <label for="signInEmail" class="form-label">NIK / Email</label>
                            <input type="text" class="form-control m-b-md" name="nik" aria-describedby="signInEmail" placeholder="Masukkan NIK atau Email">
            
                            <label for="signInPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                        </div>
            
                        <div class="auth-submit">
                            <button type="submit" class="btn btn-primary">
                                <b>Masuk</b>
                            </button>
                            <a href="{{ url('register') }}" class="auth-forgot-password float-end">Belum punya Akun? Request Akun</a>
                        </div>
                        <!-- <div class="divider"></div> -->
            
                        {!! Form::close() !!}
            
                    </div> 
                
                    <div class="app-auth-background">
            
                    </div>
                    
                </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ url('/') }}/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/pace/pace.min.js"></script>
    <script src="{{ url('/') }}/assets/js/main.min.js"></script>
    <script src="{{ url('/') }}/assets/js/custom.js"></script>
</body>

@section('java')
@endsection
