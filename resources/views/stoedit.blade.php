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
                                <h1>Management STO</h1>
                            </div>
                        </div>
                    </div>
                <div class="card">
                        <div class="card-body">
                           <!-- @foreach($sto as $p) -->
                                <form action="/sto/update" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $p-> idSto}}"> <br/>

                                    <label for="idRegional" class="form-label">Choose Regional</label>
                                <select id="idRegional" name='regional' class="form-select m-b-md" required="required">
                                    <option selected>Pilih Regional</option>
                                    @foreach ($regional as $r)
                                    <option value="{{ $r->idRegional}}">{{ $r->namaRegional }}</option>
                                    @endforeach
                                </select>

                                <label for="witelName" class="form-label">Witel</label>
                                <select id="idWitel" name='idWitel' class="form-select m-b-md" required="required">
                                    <option selected>Pilih Witel</option>
                                    @foreach ($witel as $w)
                                    <option value="{{ $w->idWitel}}">{{$w->namaWitel }}</option>
                                    @endforeach
                                </select>

                                    <label for="idSto" class="form-label">STO</label>
                                    <input type="text" class="form-control m-b-md" name="name" aria-describedby="nama" placeholder="Masukkan STO" required="required">
                                
                                    <label for="codeSto" class="form-label">Kode STO</label>
                                    <input type="text" class="form-control m-b-md" name="stoCode" aria-describedby="nama" placeholder="Masukkan STO" required="required">

                                    <input type="submit" value="Simpan Data">
                                </form>
                            <!-- @endforeach -->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('java')

@endsection