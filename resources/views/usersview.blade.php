

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
	<a href="/users/tambah"> + Tambah Pegawai Baru</a>
						<table border="2">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($users as $p)
		<tr>
			<td>{{ $p->name }}</td>
			<td>{{ $p->nik }}</td>
			<td>{{ $p->email }}</td>
			<td>{{ $p->address }}</td>
			<td>
				<a href="/users/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/users/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('java')

@endsection