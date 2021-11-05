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
                                <h1>Management Core</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5>Feeder</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card widget widget-info-navigation">
                                <div class="card-body">
                                    <div class="widget-info-navigation-container">
                                        <div class="widget-info-navigation-content">
                                            <span class="text-muted">Core Total</span><br>
                                            <span class="text-dark fw-bolder fs-2">{{$totalFeeder[0]->TotalFeeder}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card widget widget-info-navigation">
                                <div class="card-body">
                                    <div class="widget-info-navigation-container">
                                        <div class="widget-info-navigation-content">
                                            <span class="text-muted">Core Isi</span><br>
                                            <span class="text-dark fw-bolder fs-2">{{$totalFeeder[0]->TotalFeeder}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card widget widget-info-navigation">
                                <div class="card-body">
                                    <div class="widget-info-navigation-container">
                                        <div class="widget-info-navigation-content">
                                            <span class="text-muted">Core Idle</span><br>
                                            <span class="text-success fw-bolder fs-2">{{$feederNg[0]->feederNg}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card widget widget-info-navigation">
                                <div class="card-body">
                                    <div class="widget-info-navigation-container">
                                        <div class="widget-info-navigation-content">
                                            <span class="text-muted">Core Rusak</span><br>
                                            <span class="text-danger fw-bolder fs-2">{{$feederNg[0]->feederNg}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <h5>Distribusi</h5>
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card widget widget-info-navigation">
                                <div class="card-body">
                                    <div class="widget-info-navigation-container">
                                        <div class="widget-info-navigation-content">
                                            <span class="text-muted">Core Total</span><br>
                                            <span class="text-dark fw-bolder fs-2">{{$totalDistribusi[0]->totalDistribusi}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card widget widget-info-navigation">
                                <div class="card-body">
                                    <div class="widget-info-navigation-container">
                                        <div class="widget-info-navigation-content">
                                            <span class="text-muted">Core Isi</span><br>
                                            <span class="text-dark fw-bolder fs-2">{{$totalDistribusi[0]->totalDistribusi}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card widget widget-info-navigation">
                                <div class="card-body">
                                    <div class="widget-info-navigation-container">
                                        <div class="widget-info-navigation-content">
                                            <span class="text-muted">Core Idle</span><br>
                                            <span class="text-success fw-bolder fs-2">{{$distribusiIdle[0]->distribusiIdle}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card widget widget-info-navigation">
                                <div class="card-body">
                                    <div class="widget-info-navigation-container">
                                        <div class="widget-info-navigation-content">
                                            <span class="text-muted">Core Rusak</span><br>
                                            <span class="text-danger fw-bolder fs-2">{{$distribusiNg[0]->distribusiNg}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h5>Data Management Core</h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive" style="padding:25px 0;">
                                <table id="datatable1" class="display table table-bordered" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>IP GPON</th>
                                            <th>Panel</th>
                                            <th>Slot</th>
                                            <th>Port</th>
                                            <th>Rak</th>
                                            <th>Panel</th>
                                            <th>Slot</th>
                                            <th>Port</th>
                                            <th>Rak</th>
                                            <th>Panel</th>
                                            <th>Slot</th>
                                            <th>Core</th>
                                            <th>FE</th>
                                            <th>Closure 1</th>
                                            <th>Closure 2</th>
                                            <th>Closure 3</th>
                                            <th>In Panel</th>
                                            <th>Port</th>
                                            <th>Out PS Ke-</th>
                                            <th>Out Panel</th>
                                            <th>Core</th>
                                            <th>Distribusi</th>
                                            <th>Core</th>
                                            <th>ODP</th>
                                            <th>Jenis ODP</th>
                                            <th>Alamat ODP</th>
                                            <th>LAT</th>
                                            <th>LONG</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mancore as $m)
                                            <tr>
                                                <td>{{ $m->ipGpon }}</td>
                                                <td>{{ $m->panel }}</td>
                                                <td>{{ $m->slot }}</td>
                                                <td>{{ $m->port }}</td>
                                                <td>{{ $m->earak }}</td>
                                                <td>{{ $m->eapanel }}</td>
                                                <td>{{ $m->easlot }}</td>
                                                <td>{{ $m->eaport }}</td>
                                                <td>{{ $m->oarak }}</td>
                                                <td>{{ $m->oapanel }}</td>
                                                <td>{{ $m->oaslot }}</td>
                                                <td>{{ $m->oacore }}</td>
                                                <td>{{ $m->fe }}</td>
                                                <td>{{ $m->lat1 }}, {{ $m->long1 }}</td>
                                                <td>{{ $m->lat2 }}, {{ $m->long2 }}</td>
                                                <td>{{ $m->lat3 }}, {{ $m->long3 }}</td>
                                                <td>{{ $m->inPanel }}</td>
                                                <td>{{ $m->portIn }}</td>
                                                <td>{{ $m->outPsKe }}</td>
                                                <td>{{ $m->outPanel }}</td>
                                                <td>{{ $m->portOut }}</td>
                                                <td>{{ $m->dis }}</td>
                                                <td>{{ $m->core }}</td>
                                                <td>{{ $m->idStatusData }}</td>
                                                <td>{{ $m->codeOdp }}</td>
                                                <td>{{ $m->alamatOdp }}</td>
                                                <td>{{ $m->latitude }}</td>
                                                <td>{{ $m->longitude }}</td>
                                                <td>
                                                    <a href="/mancore/edit/{{ $m->idGpon }}">Edit</a>
                                                    <!-- <a href="/mancore/booking/{{ $m->idGpon }}/{{ $m->idFtmEa }}/{{ $m->idFtmOa }}/{{ $m->idFeeder }}/{{ $m->idOdc }}/{{ $m->idDistribusi }}/{{ $m->idOdp }}">Booking</a> -->
                                                    <a href="/mancore/booking/{{ $m->idOdp }}">Booking</a>
                                                    <a href="/mancore/hapus/{{ $m->idGpon }}">Hapus</a>
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

@section('include')
@endsection

@section('java')
    {{-- <script>
    $(document).ready(function() {
        $("#datatable3").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'pageLength',
                'copy',
                'csv',
                'excel',
                'pdf',
                'print'
            ],
            responsive: true,
            processing: true,
            serverSide: false,
            // language: {
            //     url: 'https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Indonesian.json'
            // },
            ajax: "{{ url('/proteksi_tower/ajax_ese') }}",
            columns: [{
                    data: 'no'
                },
                {
                    data: 'id_section'
                },
                {
                    data: 'id_tower'
                },
                {
                    data: 'counter_ese',
                },
                {
                    data: 'foto_counter_ese',
                    orderable: false,
                    render: function(data, type, row, meta) {
                        return '<img style="width:150px; height:150px;"' +
                            'src="{{ url('/storage/images/tower_ese/1000/') }}/' + data +
                            '"/>';
                    }
                },
                {
                    data: 'box_ese'
                },
                {
                    data: 'pita_magnetik'
                },
                {
                    data: 'down_konduktor'
                },
                {
                    data: 'bola_ese'
                },
                {
                    data: 'grounding'
                },
                {
                    data: 'nama_pegawai'
                },
                {
                    data: 'keterangan'
                },
                {
                    data: 'created_at'
                },
                {
                    data: 'updated_at'
                },
                {
                    data: 'btnEditDelete'
                },
            ],
        });
    });

</script> --}}

@endsection
