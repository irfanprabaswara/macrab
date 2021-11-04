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
                            <div class="table-responsive" style="padding:25px 0;">
                                <table id="datatable1" class="display table table-bordered" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>STO</th>
                                            <th>IP GPON</th>
                                            <th>GPON Panel</th>
                                            <th>FTMEA Port</th>
                                            <th>FTMOA Rack</th>
                                            <th>FTMOA Panel</th>
                                            <th>FTMOA Slot</th>
                                            <th>FTMOA Core</th>
                                            <th>Feeder Fe</th>
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
                                            <th>User</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tiketUser as $s)
                                        <tr>
                                            <td>{{ $s->codeSto }}</td>
                                            <td>{{ $s->idGpon }}</td>
                                            <td>{{ $s->idFtmEa }}</td>
                                            <td>{{ $s->rak }}</td>
                                            <td>{{ $s->panel }}</td>
                                            <td>{{ $s->slot }}</td>
                                            <td>{{ $s->idFtmOa }}</td>
                                            <td>{{ $s->idFeeder }}</td>
                                            <td>{{ $s->inPanel }}</td>
                                            <td>ODC Port</td>
                                            <td>ODC Out PS Ke-</td>
                                            <td>{{ $s->outPanel }}</td>
                                            <td>{{ $s->idOdp }}</td>
                                            <td>{{ $s->idDistribusi }}</td>
                                            <td>ODP Core</td>
                                            <td>{{ $s->idOdp }}</td>
                                            <td>Jenis ODP</td>
                                            <td>{{ $s->alamatOdp }}</td>
                                            <td>{{ $s->latitude }}</td>
                                            <td>{{ $s->longitude }}</td>
                                            <td>{{ $s->user_name }}</td>
                                            <td>
                                                @if(Auth::user()->is_admin)
                                                    @if($s->deskripsiStatus=='Pending')
                                                    <a href="{{url('/mytickets/approve/'.$s->idTiket)}}">approve</a>
                                                    |
                                                    <a href="{{url('/mytickets/decline/'.$s->idTiket)}}">decline</a>
                                                    @else
                                                    {{$s->deskripsiStatus}}
                                                    @endif
                                                @else
                                                {{$s->deskripsiStatus}}
                                                @endif
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
    </div>

@endsection

@section('java')

@endsection




