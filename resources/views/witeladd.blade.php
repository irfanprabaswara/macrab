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
                        <form action="/witel/store" method="post">
                            {{ csrf_field() }}
                            Regional <label for="idRegional">Choose Regional:</label>
                                    <select id="idRegional" name="regional">
                                    <option value="1">Regional 6</option>
                                    </select> <br>
                             Witel <input type="text" required="required" name="witelName" required="required"> <br/>
                             Kode Witel <input type="text" required="required" name="witelCode" required="required"> <br/>
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
