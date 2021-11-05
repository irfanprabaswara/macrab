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
                                <h1>Apakah Anda Yakin Akan Melakukan Booking?</h1>
                            </div>
                        </div>
                    </div>
                <div class="card">
                        <div class="card-body">
                           @foreach($odp as $s)
                            <form action="/macore/booking/update" method="post">
                                {{ csrf_field() }}
                            <input type="hidden" id="idRegional" name="idRegional" value="{{ $s->idRegional}}">
                            <input type="hidden" id="idWitel" name="idWitel" value="{{ $s->idWitel}}">
                            <input type="hidden" id="idSto" name="idSto" value="{{ $s->idSto}}">
                            <input type="hidden" id="idGpon" name="idGpon" value="{{ $s->idGpon}}">
                            <input type="hidden" id="idFtmEa" name="idFtmEa" value="{{ $s->idFtmEa}}">
                            <input type="hidden" id="idFtmOa" name="idFtmOa" value="{{ $s->idFtmOa}}">
                            <input type="hidden" id="idFeeder" name="idFeeder" value="{{ $s->idFeeder}}">
                            <input type="hidden" id="idOdc" name="idOdc" value="{{ $s->idOdc}}">
                            <input type="hidden" id="idDistribusi" name="idDistribusi" value="{{ $s->idDistribusi}}">
                            <input type="hidden" id="idOdp" name="idOdp" value="{{ $s->idOdp}}">
                            <input type="submit" value="Simpan Data">
                            <a href="/">
                                        <button>Kembali</button>
                            </a> 

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
