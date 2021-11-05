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
                                <h1>History Data Management Core</h1>
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
                                        {{-- <th>Core</th> --}}
                                        {{-- <th>FE</th> --}}
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
                                        {{-- <th>Jenis ODP</th> --}}
                                        <th>Alamat ODP</th>
                                        <th>LAT</th>
                                        <th>LONG</th>
                                        <!-- {{-- <th>Action</th> --}} -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($historyData as $h)
                                    <tr>
                                        <td>{{ $h->ipGpon }}</td>
                                        <td>{{ $h->panel }}</td>
                                        <td>{{ $h->slot }}</td>
                                        <td>{{ $h->port }}</td>
                                        <td>{{ $h->earak }}</td>
                                        <td>{{ $h->eapanel }}</td>
                                        <td>{{ $h->easlot }}</td>
                                        <td>{{ $h->eaport }}</td>
                                        <td>{{ $h->rak }}</td>
                                        <td>{{ $h->panel }}</td>
                                        <td>{{ $h->slot }}</td>
                                        {{-- <td>{{ $h->idStatusCore }}</td> --}}
                                        {{-- <td>{{ $h->fe }}</td> --}}
                                        <td>{{ $h->lat1 }}, {{ $h->long1 }}</td>
                                        <td>{{ $h->lat2 }}, {{ $h->long2 }}</td>
                                        <td>{{ $h->lat3 }}, {{ $h->long3 }}</td>
                                        <td>{{ $h->inPanel }}</td>
                                        <td>{{ $h->portIn }}</td>
                                        <td>{{ $h->outPsKe }}</td>
                                        <td>{{ $h->outPanel }}</td>
                                        <td>{{ $h->portOut }}</td>
                                        <td>{{ $h->dis }}</td>
                                        <td>{{ $h->core }}</td>
                                        {{-- <td>{{ $h->idStatusData }}</td> --}}
                                        <td>{{ $h->codeOdp }}</td>
                                        <td>{{ $h->alamatOdp }}</td>
                                        <td>{{ $h->latitude }}</td>
                                        <td>{{ $h->longitude }}</td>
                                        <!-- {{-- <td>
                                            <a href="/mancore/edit/{{ $h->idGpon }}">Edit</a>
                                            |
                                            <a href="/mancore/hapus/{{ $h->idGpon }}">Hapus</a>
                                        </td> --}} -->
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

@endsection

