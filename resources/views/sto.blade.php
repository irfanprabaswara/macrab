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
                            <a href="/sto/tambah">Tambah Data</a>
                                <thead>
                                    <tr>
                                        <th>Regional</th>
                                        <th>Witel</th>
                                        <th>STO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sto as $p)
                                    <tr>
                                        <td>{{ $p->namaRegional }}</td>
                                        <td>{{ $p->namaWitel }}</td>
                                        <td>{{ $p->namaSto }}</td>
                                        <td>{{ $p->codeSto }}</td>
                                        <td>
                                            <a href="/sto/edit/{{ $p->idSto }}">Edit</a>
                                            |
                                            <a href="/sto/hapus/{{ $p->idSto }}">Hapus</a>
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