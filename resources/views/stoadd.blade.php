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
                        <form action="/sto/store" method="post">
                            {{ csrf_field() }}
                            Regional <label for="idRegional">Choose Regional:</label>
                                    <select id="idRegional" name="regional">
                                    <option value="1">Regional 6</option>
                                    </select> <br>
                            Witel <label for="idWitel">Choose Regional:</label>
                                    <select id="idWitel" name="witel">
                                    <option value="1">Balikpapan</option>
                                    <option value="2">Kalteng</option>
                                    </select> <br>
                             STO <input type="text" required="required" name="stoName" required="required"> <br/>
                             Kode STO <input type="text" required="required" name="stoCode" required="required"> <br/>
                            <input type="submit" value="Simpan Data">
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('java')

@endsection