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
                            <table id="datatable3" class="display nowrap" style="width:100%">
                            <a href="/witel/tambah">Tambah Data</a>
                                <thead>
                                    <tr>
                                        <th>Regional</th>
                                        <th>Witel</th>
                                        <th>Kode Witel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($witel as $p)
                                    <tr>
                                        <td>{{ $p->namaRegional }}</td>
                                        <td>{{ $p->namaWitel }}</td>
                                        <td>{{ $p->codeWitel }}</td>
                                        <td>
                                            <a href="/witel/edit/{{ $p->idWitel }}">Edit</a>
                                            |
                                            <a href="/witel/hapus/{{ $p->idWitel }}">Hapus</a>
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