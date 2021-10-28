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
                                <h1>Tambah Data Management Core</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {!! Form::open([
                            'url'     => 'mancore/post_mancore',
                            'method'  => 'post',
                            'enctype' => 'multipart/form-data',
                            ]) !!}
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">GPON</h5>
                                </div>
                                <div class="card-body">
                                    <div class="example-container">
                                        <div class="example-content">
                                            <label for="inputMask3" class="form-label">IP GPON</label>
                                            <input type="text" class="form-control" aria-label="IP GPON" id="inputMask3"
                                                name="ipgpon" data-inputmask="'alias': 'ip'" inputmode="numeric" required>
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
                                            <label for="Port" class="form-label">Port</label>
                                            <input type="text" class="form-control" id="Port" name="port"
                                                aria-describedby="Port" required>
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
                                            <input type="text" class="form-control" aria-label="IP address" id="odc"
                                                name="odc" required>
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

                            <div class="example-content">
                                <button id="blockui-2" class="btn btn-primary">Block Page</button>
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>

        @endsection

        @section('java')

        @endsection
