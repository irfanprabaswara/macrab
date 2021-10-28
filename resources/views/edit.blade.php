

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
    <h3>Edit Pegawai</h3>
 
	<a href="/users"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($users as $u)
	<form action="/users/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $u->id }}"> <br/>
			<label for="nama" class="form-label">Nama Lengkap</label>
    		<input type="text" class="form-control m-b-md" name="name" aria-describedby="nama" value="{{ $u->name }}" required="required">
		
			<label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control m-b-md" name="nik" aria-describedby="nik" value="{{ $u->nik }}" required="required">
		
			<label for="email" class="form-label">Email</label>
    		<input type="text" class="form-control m-b-md" name="email" aria-describedby="email" value="{{ $u->email }}" required="required">
		
			<label for="alamat" class="form-label">Alamat</label>
    		<input type="text" class="form-control m-b-md" name="address" aria-describedby="alamat" value="{{ $u->address }}" required="required">
        
			<label for="telepon" class="form-label">Telepon</label>
    		<input type="text" class="form-control m-b-md" name="contact" aria-describedby="telepon" value="{{ $u->contact }}" required="required">
			<label for="akun" class="form-label">Jenis Akun</label>
    		<select id="is_admin" name='is_admin' class="form-select m-b-md" value="{{ $u->is_admin }}" required="required">
				<option selected></option>
				<option value="0">Teknisi</option>
				<option value="1">Admin</option>
    		</select>
        
			<label for="mitra" class="form-label">Mitra</label>
    		<select id="mitra" name='mitra' class="form-select m-b-md" value="{{ $u->mitra }}" required="required">
        		<option selected>{{ $u->mitra }}</option>
        		<option value="mitra_samarinda">Mitra Samarinda 1</option>
    			<option value="mitra_kalsel">Mitra Kalimantan Selatan 1</option>
    		</select>
        
			<label for="witel" class="form-label">Witel</label>
    		<select id="witel" name='witel' class="form-select m-b-md" value="{{ $u->witel }}" required="required">
				<option selected>{{ $u->witel }}</option>
				<option value="witel_samarinda">Witel Samarinda</option>
				<option value="witel_kalsel">Witel Kalimantan Selatan</option>
   			</select>
        
			<label for="regional" class="form-label">Regional</label>
    		<select id="Regional" name='Regional' class="form-select m-b-md" value="{{ $u->regional }}" required="required">
				<option selected>{{ $u->regional }}</option>
				<option value="regional_1">Regional 1</option>
				<option value="regional_2">Regional 2</option>
				<option value="regional_3">Regional 3</option>
				<option value="regional_4">Regional 4</option>
				<option value="regional_5">Regional 5</option>
				<option value="regional_6">Regional 6</option>
    		</select>
        
			<label for="signInPassword" class="form-label">Password</label>
    		<input type="password" class="form-control" name="password" aria-describedby="signInPassword" value="{{ $u->password }}" required="required">
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
	</div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

@section('java')

@endsection


