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

                                <label for="idRegional" class="form-label">Choose Regional</label>
                            <select id="idRegional" name='regional' class="form-select m-b-md" required="required">
                                <option selected>Pilih Regional</option>
                                @foreach ($regional as $r)
                                <option value="{{ $r->idRegional}}">{{ $r->namaRegional }}</option>
                                @endforeach
                            </select>

                            <label for="witelName" class="form-label">Witel</label>
                            <select id="namaWitel" name='namaWitel' class="form-select m-b-md" required="required">
                                <option selected>Pilih Witel</option>
                                @foreach ($witel as $w)
                                <option value="{{ $w->namaWitel}}">{{$w->namaWitel }}</option>
                                @endforeach
                            </select>
                            <label for="witelCode" class="form-label">Kode Witel</label>
                            <input type="text" class="form-control m-b-md" name="codeWitel" aria-describedby="nama" placeholder="Kode Witel" required="required">
                            <input type="hidden" id="idWitel" name="idWitel" value="{{ $w->idWitel}}">
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
