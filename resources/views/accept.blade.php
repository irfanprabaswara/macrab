

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
                                <h1>Management Register User</h1>
                                <a href="/users"> Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
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
				<a href="/accept/{{ $p->id }}">Approval</a>
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



@endsection

@section('java')

@endsection