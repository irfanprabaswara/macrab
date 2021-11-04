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
                                <h1>Management Witel</h1>
                            </div>
                        </div>
                    </div>
                <div class="card">
                        <div class="card-body">
                           @foreach($witel as $p)
                            <form action="/witel/update" method="post">
                                {{ csrf_field() }}

                                <input type="hidden" name="id" value="{{ $p-> idWitel}}"> <br/>
                                Regional <label for="idRegional">Choose Regional:</label>
                                    <select id="idRegional" name="regional">
                                    <option value="1">Regional 6</option>
                                    </select> <br>
                                Witel <input type="text" required="required" name="witelName" value="{{ $p->namaWitel }}"> <br/>
                                Kode Witel<input type="text" required="required" name="witelCode" value="{{ $p->codeWitel}}"> <br/>
                                <input type="submit" value="Simpan Data">

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
