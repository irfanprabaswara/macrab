@extends('_partials.layout')
{{-- @section('title', $title) --}}
@section('head')
@endsection

@section('body')
<style>
input[type="submit"]{
    /* change these properties to whatever you want */
    background-color: #FF6536;
    color: white;
    border-radius: 5px;
}
</style>
<div class="app-container">
        <div class="app-content">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>Booking Core</h1>
                            </div>
                        </div>
                    </div>
                        <div class="card">
                            <div class="card-body">
                                @foreach($mancore as $s)
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">ODC</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="example-container">
                                            <div class="example-content">
                                                <input type="text" id="lname" name="lname" readonly="readonly" value="{{ $s->inPanel}}">
                                                <input type="text" id="lname" name="lname" readonly="readonly" value="{{ $s->portIn}}">
                                                <input type="text" id="lname" name="lname" readonly="readonly" value="{{ $s->outPanel}}">
                                                <input type="text" id="lname" name="lname" readonly="readonly" value="{{ $s->portOut}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">FEEDER</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="example-container">
                                            <div class="example-content">
                                                <input type="text" id="kepo" name="kepo" readonly="readonly" value="{{ $s->dis}}">
                                                <input type="text" id="kepo" name="kepo" readonly="readonly" value="{{ $s->core}}"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">ODP</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="example-container">
                                            <div class="example-content">
                                                <input type="text" id="pret" name="pret" readonly="readonly" value="{{ $s->codeOdp}}">
                                                <input type="text" id="pret" name="pret" readonly="readonly" value="{{ $s->codeJenisOdp}}">
                                                <input type="text" id="pret" name="pret" readonly="readonly" value="{{ $s->alamatOdp}}">
                                                <input type="text" id="pret" name="pret" readonly="readonly" value="{{ $s->latitude}}">
                                                <input type="text" id="pret" name="pret" readonly="readonly" value="{{ $s->longitude}}">
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
                        </div>
                            </div>
                                    <form action="/macore/booking/update" method="post">                                   
                                </div>
                                        {{ csrf_field() }}
                                        @foreach($odp as $o)
                                        <input type="hidden" id="idRegional" name="idRegional" value="{{ $o->idRegional}}">
                                        <input type="hidden" id="idWitel" name="idWitel" value="{{ $o->idWitel}}">
                                        <input type="hidden" id="idSto" name="idSto" value="{{ $o->idSto}}">
                                        <input type="hidden" id="idGpon" name="idGpon" value="{{ $s->idGpon}}">
                                        <input type="hidden" id="idFtmEa" name="idFtmEa" value="{{ $s->idFtmEa}}">
                                        <input type="hidden" id="idFtmOa" name="idFtmOa" value="{{ $s->idFtmOa}}">
                                        <input type="hidden" id="idFeeder" name="idFeeder" value="{{ $s->idFeeder}}">
                                        <input type="hidden" id="idOdc" name="idOdc" value="{{ $s->idOdc}}">
                                        <input type="hidden" id="idDistribusi" name="idDistribusi" value="{{ $s->idDistribusi}}">
                                        <input type="hidden" id="idOdp" name="idOdp" value="{{ $s->idOdp}}"><br><br>
                                        <input type="submit"  value="Simpan Data">
                                        <a href="/">
                                                    <button style:red>Cancel</button>
                                        </a> 
                                        @endforeach

                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('java')

@endsection
