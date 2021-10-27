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
                                <h1>My Ticket</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <h5>Data Pengajuan Update Data Management Core</h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable3" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>IP GPON</th>
                                        <th>GPON Panel</th>
                                        <th>GPON Slot</th>
                                        <th>GPON Port</th>
                                        <th>FTMEA Rack</th>
                                        <th>FTMEA Panel</th>
                                        <th>FTMEA Slot</th>
                                        <th>FTMEA Port</th>
                                        <th>FTMOA Rack</th>
                                        <th>FTMOA Panel</th>
                                        <th>FTMOA Slot</th>
                                        <th>FTMOA Core</th>
                                        <th>Feeder Fe</th>
                                        <th>Feeder Closure 1</th>
                                        <th>Feeder Closure 2</th>
                                        <th>Feeder Closure 3</th>
                                        <th>ODC IN Panel</th>
                                        <th>ODC Port</th>
                                        <th>ODC Out PS Ke-</th>
                                        <th>ODC Out Panel</th>
                                        <th>ODC Core</th>
                                        <th>DISTRIBUSI</th>
                                        <th>ODP Core</th>
                                        <th>ODP</th>
                                        <th>Jenis ODP</th>
                                        <th>Alamat ODP</th>
                                        <th>Lat</th>
                                        <th>Lon</th>
                                        <th>Status</th>
                                        <th>User</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tiketUser as $s)
                                    <tr>
                                        <td>{{ $s->idTiket }}</td>
                                        <td>IP GPON</td>
                                        <td>GPON Panel</td>
                                        <td>GPON Slot</td>
                                        <td>GPON Port</td>
                                        <td>FTMEA Rack</td>
                                        <td>FTMEA Panel</td>
                                        <td>FTMEA Slot</td>
                                        <td>FTMEA Port</td>
                                        <td>FTMOA Rack</td>
                                        <td>FTMOA Panel</td>
                                        <td>FTMOA Slot</td>
                                        <td>FTMOA Core</td>
                                        <td>Feeder Fe</td>
                                        <td>Feeder Closure 1</td>
                                        <td>Feeder Closure 2</td>
                                        <td>Feeder Closure 3</td>
                                        <td>ODC IN Panel</td>
                                        <td>ODC Port</td>
                                        <td>ODC Out PS Ke-</td>
                                        <td>ODC Out Panel</td>
                                        <td>ODC Core</td>
                                        <td>DISTRIBUSI</td>
                                        <td>ODP Core</td>
                                        <td>{{ $s->idOdp }}</td>
                                        <td>Jenis ODP</td>
                                        <td>Alamat ODP</td>
                                        <td>Lat</td>
                                        <td>Lon</td>
                                        <td>{{ $s->deskripsiStatus }}</td>
                                        <td>{{ $s->createdBy }}</td>
                                        <td>
                                            @if(Auth::user()->is_admin)
                                            <a href="/sto/edit/{{ $s->idTiket }}">approve</a>
                                            |
                                            <a href="/sto/hapus/{{ $s->idTiket }}">decline</a>
                                            @else
                                            {{$s->deskripsiStatus}}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach                                </tbody>
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




