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

                            <label for="idRegional" class="form-label">Choose Regional</label>
                            <select id="idRegional" name='regional' class="form-select m-b-md" required="required">
                                <option selected>Pilih Regional</option>
                                <option value="Regional_6">Regional 6</option>
                                <option value="Regional_7">Regional 7</option>
                            </select>

                            <label for="idWitel" class="form-label">Choose Witel</label>
                            <select id="idWitel" name='witelName' class="form-select m-b-md" required="required">
                                <option selected>Pilih Witel</option>
                                <option value="Balikpapan">Balikpapan</option>
                                <option value="Kalsel">Kalsel</option>
                            </select>

                            <label for="witelName" class="form-label">Witel</label>
                            <input type="text" class="form-control m-b-md" name="witelName" aria-describedby="nama" placeholder="Masukkan Witel" required="required">

                            <label for="witelCode" class="form-label">Kode Witel</label>
                            <input type="text" class="form-control m-b-md" name="witelCode" aria-describedby="nama" placeholder="Kode Witel" required="required">

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
