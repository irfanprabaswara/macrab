@extends('_partials.layout')
{{-- @section('title', $title) --}}
@section('head')
@endsection

@section('body') 
<div class="app-container">
        <div class="app-content">
            <div class="content-wrapper">
                <div class="container">
                <div class="card">
                        <div class="card-body">
						<h3>Data Pegawai</h3>
 
 <a href="/users"> Kembali</a>
 
 <br/>
 <br/>

 <form action="/users/store" method="post">
	 {{ csrf_field() }}
	 
	<label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control m-b-md" name="name" aria-describedby="nama" placeholder="Masukkan Nama Lengkap Anda" required="required">
	 
	<label for="nik" class="form-label">NIK</label>
    <input type="text" class="form-control m-b-md" name="nik" aria-describedby="nik" placeholder="Masukkan NIK Anda" required="required">
	 
	<label for="email" class="form-label">Email</label>
    <input type="text" class="form-control m-b-md" name="email" aria-describedby="email" placeholder="Masukkan Email Anda" required="required">
	 >
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
        @foreach ($witel as $w)
            <option value="{!!$r->idWitel!!}">{{$r->namaWitel}}</option>
        @endforeach
    </select>
	 
	<label for="regional" class="form-label">Regional</label>
    <select id="Regional" name='Regional' class="form-select m-b-md" required="required">
        <option selected>Pilih Regional</option>
        @foreach ($regional as $r)
            <option value="{!!$r->idRegional!!}">{{$r->namaRegional}}</option>
        @endforeach
    </select>
	 
	<label for="signInPassword" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required="required">
	 <input type="submit" value="Simpan Data">
 </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('java')

@endsection