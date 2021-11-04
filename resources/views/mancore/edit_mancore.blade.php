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
                            <h1>Edit Data Management Core</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {!! Form::open([
                        'url' => 'mancore/post_mancore',
                        'method' => 'post',
                        'enctype' => 'multipart/form-data',
                        'class' => 'dropzone needsclick',
                        'id' => 'demo-upload'
                        ]) !!}
                        <div class="col-md-12">
                            <input type="hidden" name="id" value="{{ $mancore->idGpon }}">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">GPON</h5>
                                </div>
                                <div class="card-body">
                                    <div class="example-container">
                                        <div class="example-content">
                                            <div class="row g-3">
                                                <label for="inputMask3" class="form-label">IP GPON</label>

                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" aria-label="IP GPON" id="inputMask3"
                                                    name="ipgpon" data-inputmask="'alias': 'ip'" inputmode="numeric" required>
                                                </div>
                                                <div class="col-md-2">

                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">
                                                        <i class="material-icons">
                                                            add_circle_outline
                                                        </i>

                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="example-content">
                                            <label for="Panel" class="form-label">Panel</label>
                                            <input type="text" class="form-control" id="Panel" name="panel"
                                            aria-describedby="Panel" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Slot" class="form-label">Slot</label>
                                            <input type="text" class="form-control" id="Slot" name="slot"
                                            aria-describedby="Slot" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Port" class="form-label">Port</label>
                                            <input type="text" class="form-control" id="Port" name="port"
                                            aria-describedby="Port" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">FTM EA</h5>
                                </div>
                                <div class="card-body">
                                    <div class="example-container">
                                        <div class="example-content">
                                            <label for="Rak" class="form-label">Rak</label>
                                            <input type="text" class="form-control" aria-label="IP address" id="Rak"
                                            name="rak" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Panel" class="form-label">Panel</label>
                                            <input type="text" class="form-control" id="Panel" name="panel"
                                            aria-describedby="Panel" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Slot" class="form-label">Slot</label>
                                            <input type="text" class="form-control" id="Slot" name="slot"
                                            aria-describedby="Slot" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Port" class="form-label">Port</label>
                                            <input type="text" class="form-control" id="Port" name="port"
                                            aria-describedby="Port" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">FTM OA</h5>
                                </div>
                                <div class="card-body">
                                    <div class="example-container">
                                        <div class="example-content">
                                            <label for="Rak" class="form-label">Rak</label>
                                            <input type="text" class="form-control" aria-label="Rak" id="Rak" name="rak"
                                            required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Panel" class="form-label">Panel</label>
                                            <input type="text" class="form-control" id="Panel" name="panel"
                                            aria-describedby="Panel" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Slot" class="form-label">Slot</label>
                                            <input type="text" class="form-control" id="Slot" name="slot"
                                            aria-describedby="Slot" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="core" class="form-label">Core</label>
                                            <input type="text" class="form-control" id="core" name="core"
                                            aria-describedby="core" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Feeder</h5>
                                </div>
                                <div class="card-body">
                                    <div class="example-container">
                                        <div class="example-content">
                                            <label for="fe" class="form-label">Fe</label>
                                            <input type="text" class="form-control" aria-label="fe" id="fe" name="fe"
                                            required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Closure1lat" class="form-label">Closure 1 (Lat)</label>
                                            <input type="text" class="form-control" id="Closure1lat" name="lat1"
                                            aria-describedby="Closure 1 Lat" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Closure1long" class="form-label">Closure 1 (Long)</label>
                                            <input type="text" class="form-control" id="Closure1long" name="long1"
                                            aria-describedby="Closure 1 Long" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Closure2lat" class="form-label">Closure 2 (Lat)</label>
                                            <input type="text" class="form-control" id="Closure2lat" name="lat2"
                                            aria-describedby="Closure 2 Lat" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Closure2long" class="form-label">Closure 2 (Long)</label>
                                            <input type="text" class="form-control" id="Closure2long" name="long2"
                                            aria-describedby="Closure 2 Long" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Closure3lat" class="form-label">Closure 3 (Lat)</label>
                                            <input type="text" class="form-control" id="Closure3lat" name="lat3"
                                            aria-describedby="Closure 3 Lat" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="Closure3long" class="form-label">Closure 3 (Long)</label>
                                            <input type="text" class="form-control" id="Closure3long" name="long3"
                                            aria-describedby="Closure 3 Long" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">ODC</h5>
                                </div>
                                <div class="card-body">
                                    <div class="example-container">
                                        <div class="example-content">
                                            <label for="odc" class="form-label">ODC</label>
                                            <input type="text" class="form-control" aria-label="IP address" id="odcCode"
                                            name="odcCode" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="inPanel" class="form-label">In Panel</label>
                                            <input type="text" class="form-control" id="inPanel" name="inPanel"
                                            aria-describedby="inPanel" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="portIn" class="form-label">Port In</label>
                                            <input type="text" class="form-control" id="portIn" name="portIn"
                                            aria-describedby="portIn" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">SPL Outlet 1</h5>
                                </div>
                                <div class="card-body">
                                    <div class="example-container">
                                        <div class="example-content">
                                            <label for="outPanel" class="form-label">Out panel</label>
                                            <input type="text" class="form-control" aria-label="IP address" id="outPanel"
                                            name="outPanel" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="port" class="form-label">Port</label>
                                            <input type="text" class="form-control" id="port" name="port"
                                            aria-describedby="inPanel" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="distribusi" class="form-label">Distribusi</label>
                                            <input type="text" class="form-control" id="distribusi" name="distribusi"
                                            aria-describedby="distribusi" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="core" class="form-label">Core</label>
                                            <input type="text" class="form-control" id="core" name="core"
                                            aria-describedby="core" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="odp" class="form-label">ODP</label>
                                            <input type="text" class="form-control" id="odp" name="odp"
                                            aria-describedby="odp" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="jenisOdp" class="form-label">Jenis ODP</label>
                                            <input type="text" class="form-control" id="jenisOdp" name="jenisOdp"
                                            aria-describedby="odp" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="alamatOdp" class="form-label">Alamat ODP</label>
                                            <input type="text" class="form-control" id="alamatOdp" name="alamatOdp"
                                            aria-describedby="odp" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="latitude" class="form-label">Latitude</label>
                                            <input type="text" class="form-control" id="latitude" name="latitude"
                                            aria-describedby="odp" required>
                                        </div>
                                        <div class="example-content">
                                            <label for="longitude" class="form-label">Longitude</label>
                                            <input type="text" class="form-control" id="longitude" name="longitude"
                                            aria-describedby="odp" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">SPL Outlet 1</h5>
                                </div>
                                <div class="card-body">
                                    <div class="example-container">
                                        <div class="example-content">
                                            <label for="outPanel" class="form-label">Out panel</label>
                                            <input type="text" class="form-control" aria-label="IP address" id="outPanel"
                                            name="outPanel" >
                                        </div>
                                        <div class="example-content">
                                            <label for="port" class="form-label">Port</label>
                                            <input type="text" class="form-control" id="port" name="port"
                                            aria-describedby="inPanel" >
                                        </div>
                                        <div class="example-content">
                                            <label for="distribusi" class="form-label">Distribusi</label>
                                            <input type="text" class="form-control" id="distribusi" name="distribusi"
                                            aria-describedby="distribusi" >
                                        </div>
                                        <div class="example-content">
                                            <label for="core" class="form-label">Core</label>
                                            <input type="text" class="form-control" id="core" name="core"
                                            aria-describedby="core" >
                                        </div>
                                        <div class="example-content">
                                            <label for="odp" class="form-label">ODP</label>
                                            <input type="text" class="form-control" id="odp" name="odp"
                                            aria-describedby="odp" >
                                        </div>
                                        <div class="example-content">
                                            <label for="jenisOdp" class="form-label">Jenis ODP</label>
                                            <input type="text" class="form-control" id="jenisOdp" name="jenisOdp"
                                            aria-describedby="odp" >
                                        </div>
                                        <div class="example-content">
                                            <label for="alamatOdp" class="form-label">Alamat ODP</label>
                                            <input type="text" class="form-control" id="alamatOdp" name="alamatOdp"
                                            aria-describedby="odp" >
                                        </div>
                                        <div class="example-content">
                                            <label for="latitude" class="form-label">Latitude</label>
                                            <input type="text" class="form-control" id="latitude" name="latitude"
                                            aria-describedby="odp" >
                                        </div>
                                        <div class="example-content">
                                            <label for="longitude" class="form-label">Longitude</label>
                                            <input type="text" class="form-control" id="longitude" name="longitude"
                                            aria-describedby="odp" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">SPL Outlet 2</h5>
                                </div>
                                <div class="card-body">
                                    <div class="example-container">
                                        <div class="example-content">
                                            <label for="outPanel" class="form-label">Out panel</label>
                                            <input type="text" class="form-control" aria-label="IP address" id="outPanel"
                                            name="outPanel" >
                                        </div>
                                        <div class="example-content">
                                            <label for="port" class="form-label">Port</label>
                                            <input type="text" class="form-control" id="port" name="port"
                                            aria-describedby="inPanel" >
                                        </div>
                                        <div class="example-content">
                                            <label for="distribusi" class="form-label">Distribusi</label>
                                            <input type="text" class="form-control" id="distribusi" name="distribusi"
                                            aria-describedby="distribusi" >
                                        </div>
                                        <div class="example-content">
                                            <label for="core" class="form-label">Core</label>
                                            <input type="text" class="form-control" id="core" name="core"
                                            aria-describedby="core" >
                                        </div>
                                        <div class="example-content">
                                            <label for="odp" class="form-label">ODP</label>
                                            <input type="text" class="form-control" id="odp" name="odp"
                                            aria-describedby="odp" >
                                        </div>
                                        <div class="example-content">
                                            <label for="jenisOdp" class="form-label">Jenis ODP</label>
                                            <input type="text" class="form-control" id="jenisOdp" name="jenisOdp"
                                            aria-describedby="odp" >
                                        </div>
                                        <div class="example-content">
                                            <label for="alamatOdp" class="form-label">Alamat ODP</label>
                                            <input type="text" class="form-control" id="alamatOdp" name="alamatOdp"
                                            aria-describedby="odp" >
                                        </div>
                                        <div class="example-content">
                                            <label for="latitude" class="form-label">Latitude</label>
                                            <input type="text" class="form-control" id="latitude" name="latitude"
                                            aria-describedby="odp" >
                                        </div>
                                        <div class="example-content">
                                            <label for="longitude" class="form-label">Longitude</label>
                                            <input type="text" class="form-control" id="longitude" name="longitude"
                                            aria-describedby="odp" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">SPL Outlet 3</h5>
                                </div>
                                <div class="card-body">
                                    <div class="example-container">
                                        <div class="example-content">
                                            <label for="outPanel" class="form-label">Out panel</label>
                                            <input type="text" class="form-control" aria-label="IP address" id="outPanel"
                                            name="outPanel" >
                                        </div>
                                        <div class="example-content">
                                            <label for="port" class="form-label">Port</label>
                                            <input type="text" class="form-control" id="port" name="port"
                                            aria-describedby="inPanel" >
                                        </div>
                                        <div class="example-content">
                                            <label for="distribusi" class="form-label">Distribusi</label>
                                            <input type="text" class="form-control" id="distribusi" name="distribusi"
                                            aria-describedby="distribusi" >
                                        </div>
                                        <div class="example-content">
                                            <label for="core" class="form-label">Core</label>
                                            <input type="text" class="form-control" id="core" name="core"
                                            aria-describedby="core" >
                                        </div>
                                        <div class="example-content">
                                            <label for="odp" class="form-label">ODP</label>
                                            <input type="text" class="form-control" id="odp" name="odp"
                                            aria-describedby="odp" >
                                        </div>
                                        <div class="example-content">
                                            <label for="jenisOdp" class="form-label">Jenis ODP</label>
                                            <select id="jenisOdp" name='jenisOdp' class="form-select m-b-md"
                                            >
                                            <option selected>Pilih Jenis ODP</option>
                                            <option value="0">ODP Pedestal</option>
                                            <option value="1">ODP Closure</option>
                                        </select>
                                    </div>
                                    <div class="example-content">
                                        <label for="alamatOdp" class="form-label">Alamat ODP</label>
                                        <input type="text" class="form-control" id="alamatOdp" name="alamatOdp"
                                        aria-describedby="odp" >
                                    </div>
                                    <div class="example-content">
                                        <label for="latitude" class="form-label">Latitude</label>
                                        <input type="text" class="form-control" id="latitude" name="latitude"
                                        aria-describedby="odp" >
                                    </div>
                                    <div class="example-content">
                                        <label for="longitude" class="form-label">Longitude</label>
                                        <input type="text" class="form-control" id="longitude" name="longitude"
                                        aria-describedby="odp" >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Upload</h5>
                            </div>
                            <div class="card-body">
                                <div id="dropzone">
                                    <div class="dz-message needsclick">
                                        <button type="button" class="dz-button">Drop files here or click to
                                            upload.</button><br />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="example-content">
                                <button id="blockui-2" class="btn btn-primary">Simpan Data</button>
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add GPON</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            {{-- 'enctype' => 'multipart/form-data', --}}
                            {{-- 'class' => 'dropzone needsclick', --}}
                            {!! Form::open([
                                'url' => 'mancore/doAddGpon',
                                'method' => 'post',
                                'enctype' => 'multipart/form-data',
                                ]) !!}
                                {{-- <form action="doAddGpon" method="post" enctype="multipart/form-data"> --}}
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">IP GPON</label>
                                        <div class="col-sm-10">
                                            <input type="text" name='ipgpon' class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    {{-- <button type="submit" class="btn btn-primary">Sign in</button> --}}


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type=submit" class="btn btn-primary">Save changes</button>
                                </div>
                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>

                    @endsection

                    @section('java')

                    @endsection
