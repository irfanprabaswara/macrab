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
                        <h5>Data Pengajuan Booking Core</h5>
                    </div>
                    <div class="card">
                        <!-- draft tabel 1 -->
                        <!-- <div class="card-body">
                            <div class="table-responsive" style="padding:25px 0;">
                                <table id="datatable1" class="display table table-bordered" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>ID Tiket</th>
                                            <th>IP GPON</th>
                                            <th>GPON Panel</th>
                                            <th>GPON Port</th>
                                            <th>GPON Slot</th>
                                            <th>FTMEA Rack</th>
                                            <th>FTMEA Panel</th>
                                            <th>FTMEA Slot</th>
                                            <th>FTMEA Port</th>
                                            <th>FTMOA Rack</th>
                                            <th>FTMOA Panel</th>
                                            <th>FTMOA Slot</th>
                                            <th>FTMOA Core</th>
                                            <th>Feeder Fe</th>
                                            <th>Feeder Closure1</th>
                                            <th>Feeder Closure2</th>
                                            <th>Feeder Closure3</th>
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
                                            <th>Created by</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tiketUser as $s)
                                        <tr>
                                            <td>{{ $s->idTiket }}</td>
                                            <td>{{ $s->ipgpon }}</td>
                                            <td>{{ $s->gpon_panel }}</td>
                                            <td>{{ $s->gpon_slot }}</td>
                                            <td>{{ $s->gpon_all }}</td>
                                            <td>{{ $s->ftmea_rak }}</td>
                                            <td>{{ $s->ftmea_panel }}</td>
                                            <td>{{ $s->ftmea_slot }}</td>
                                            <td>{{ $s->ftmea_port }}</td>
                                            <td>{{ $s->ftmoa_rak }}</td>
                                            <td>{{ $s->ftmoa_panel }}</td>
                                            <td>{{ $s->ftmoa_slot }}</td>
                                            <td>{{ $s->ftmoa_core }}</td>
                                            <td>Feeder Fe</td>
                                            <td>Feeder Closure1</td>
                                            <td>Feeder Closure2</td>
                                            <td>Feeder Closure3</t>
                                            <th>{{ $s->odc_inpanel }}</th>
                                            <th>ODC Port</th>
                                            <th>ODC Out PS Ke-</th>
                                            <th>ODC Out Panel</th>
                                            <th>ODC Core</th>
                                            <td>{{ $s->dis }}</td>
                                            <td>ODP Core</td>
                                            <td>{{ $s->codeOdp }}</td>                  
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
                        </div> -->
                        
                        <!-- draft tabel 2 -->
                        <div class="card-body">
                            <div class="table-responsive" style="padding:25px 0;">
                                <table id="datatable1" class="display table table-bordered" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>ID Tiket</th>
                                            <th>IP GPON</th>
                                            <th>GPON Panel/Port/Slot</th>
                                            <th>FTMEA Rack/Panel/Slot/Port</th>
                                            <th>FTMOA Rack/Panel/Slot/Core</th>
                                            <th>Feeder Fe</th>
                                            <th>Feeder Status Core</th>
                                            <th>Feeder Closure1</th>
                                            <th>Feeder Closure2</th>
                                            <th>Feeder Closure3</th>
                                            <th>ODC IN Panel</th>
                                            <th>ODC Port</th>
                                            <th>ODC Out PS Ke-</th>
                                            <th>ODC Out Panel</th>
                                            <th>ODC Core</th>
                                            <th>DISTRIBUSI</th>
                                            <th>DISTRIBUSI Status Core</th>
                                            <th>ODP Core</th>
                                            <th>ODP</th>
                                            <th>Jenis ODP</th>
                                            <th>Alamat ODP</th>
                                            <th>Lat</th>
                                            <th>Lon</th>
                                            <th>Created by</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tiketUser as $s)
                                        <tr>
                                            <td>{{ $s->idTiket }}</td>
                                            <td>{{ $s->ipgpon }}</td>
                                            <td>{{ $s->gpon_all }}</td>
                                            <td>{{ $s->ftmea_all }}</td>
                                            <td>{{ $s->ftmoa_all }}</td>
                                            <td>Fe</td> 
                                            <td>{{ $s->fedstatcor }}</td>
                                            <td>{{ $s->clos1 }}</td>
                                            <td>{{ $s->clos2 }}</td>
                                            <td>{{ $s->clos3 }}</td>
                                            <td>{{ $s->odc_inpanel }}</td>
                                            <td>{{ $s->odc_portin }}</td>
                                            <td>{{ $s->odc_outpske }}</td>
                                            <td>{{ $s->odc_outpanel }}</td>
                                            <td>{{ $s->odc_portout }}</td>
                                            <td>{{ $s->dis }}</td>
                                            <td>{{ $s->disstatcor }}</td>
                                            <td>odc core</td>
                                            <td>{{ $s->codeOdp }}</td>                  
                                            <td>{{ $s->jenis_odp }}</td>
                                            <td>{{ $s->alamatOdp }}</td>
                                            <td>{{ $s->latitude }}</td>
                                            <td>{{ $s->longitude }}</td>
                                            <td>{{ $s->user_name }}</td>
                                            <td>
                                                @if(Auth::user()->is_admin)
                                                    @if($s->deskripsiStatus=='Pending')
                                                    <a href="{{url('/mytickets//booking_core/approve/'.$s->idTiket)}}">approve</a>
                                                    |
                                                    <a href="{{url('/mytickets/booking_core/decline/'.$s->idTiket)}}">decline</a>
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