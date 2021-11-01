

@extends('_partials.layout')
{{-- @section('title', $title) --}}
@section('head')
@endsection

@section('body') 
<div class="app-container">
        <div class="app-content">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>Management User</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
						<a href="/users/tambah"> + Tambah Pegawai Baru</a>
                            <table id="datatable3" class="display nowrap" style="width:100%">
                                <thead>
								<tr>
			<th style="background-color:#FF6536; color : white">Nama</th>
			<th style="background-color:#FF6536; color : white">NIK</th>
			<th style="background-color:#FF6536; color : white">Email</th>
			<th style="background-color:#FF6536; color : white">Alamat</th>
			<th style="background-color:#FF6536; color : white">Opsi</th>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!-- <div class="app-container">
        <div class="app-content">
            <div class="content-wrapper">
                <div class="container">
                <div class="card">
                        <div class="card-body">
					<div class="col">
                        <h5>Data Management Core</h5>
                    </div>
	<a href="/users/tambah"> + Tambah Pegawai Baru</a>
						<table border="3">
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
        </div> -->
@endsection

@section('java')

@endsection