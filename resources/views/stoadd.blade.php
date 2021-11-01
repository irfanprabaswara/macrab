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
                        <h3>Data STO</h3>

<a href="/sto   "> Kembali</a>
 
 <br/>
 <br/>
                        <form action="/sto/store" method="post">
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
                                    
                            <label for="idSto" class="form-label">STO</label>
                            <input type="text" class="form-control m-b-md" name="name" aria-describedby="nama" placeholder="Masukkan STO" required="required">

                            <label for="codeSto" class="form-label">Kode STO</label>
                            <input type="text" class="form-control m-b-md" name="name" aria-describedby="nama" placeholder="Masukkan STO" required="required">

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