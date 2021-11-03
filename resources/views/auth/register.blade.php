@extends('_partials.layout_login')
@section('title', $title)
@section('head')
@endsection

<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Macrab</a>
            </div>
            <p class="auth-description">Management Core Agile Borneo Dashboard.<br></p>

            {!! Form::open(['url' => 'register/post_user', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

            <div class="auth-credentials m-b-xxl">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control m-b-md" name="name" aria-describedby="nama" placeholder="Masukkan Nama Lengkap Anda" required="required">

                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control m-b-md" name="nik" aria-describedby="nik" placeholder="Masukkan NIK Anda" required="required">

                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control m-b-md" name="email" aria-describedby="email" placeholder="Masukkan Email Anda" required="required">

                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control m-b-md" name="address" aria-describedby="alamat" placeholder="Masukkan Alamat Anda" required="required">

                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control m-b-md" name="contact" aria-describedby="telepon" placeholder="Masukkan Telepon Anda" required="required">

                <label for="akun" class="form-label">Jenis Akun</label>
                <select id="is_admin" name='is_admin' class="form-select m-b-md" required="required">
                    <option selected>Pilih Jenis Akun</option>
                    <option value="0">Teknisi</option>
                    <option value="1">Admin</option>
                </select>

                <label for="mitra" class="form-label">Mitra</label>
                <select id="mitra" name='mitra' class="form-select m-b-md" required="required">
                    <option selected>Pilih Mitra</option>
                    <option value="mitra_samarinda">Mitra Samarinda 1</option>
                    <option value="mitra_kalsel">Mitra Kalimantan Selatan 1</option>
                </select>

                <label for="witel" class="form-label">Witel</label>
                <select id="witel" name='witel' class="form-select m-b-md" required="required">
                    <option selected>Pilih Witel</option>
                    <option value="witel_samarinda">Witel Samarinda</option>
                    <option value="witel_kalsel">Witel Kalimantan Selatan</option>
                </select>

                <label for="regional" class="form-label">Regional</label>
                <select id="Regional" name='Regional' class="form-select m-b-md" required="required">
                    <option selected>Pilih Regional</option>
                    <option value="regional_1">Regional 1</option>
                    <option value="regional_2">Regional 2</option>
                    <option value="regional_3">Regional 3</option>
                    <option value="regional_4">Regional 4</option>
                    <option value="regional_5">Regional 5</option>
                    <option value="regional_6">Regional 6</option>
                </select>

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required="required">
            </div>

            <div class="auth-submit">
                <button type="submit" class="btn btn-primary">
                    <b>Masuk</b>
                </button>
                <a href="{{ url('register') }}" class="auth-forgot-password float-end">Belum punya Akun? Request Akun</a>
            </div>
            <div class="divider"></div>

            {!! Form::close() !!}

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
