<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoController extends Controller
{
    // if (empty(Auth::user())) {
    //     return redirect('/login', 'refresh');
    // } else {
    //     return view('mytickets');

    public function Index()
    {
        $sto = DB::table('sto')
            ->join('witel', 'sto.idwitel', '=', 'witel.idWitel')
            ->join('regional', 'sto.idregional', '=', 'regional.idRegional')
            ->select('regional.namaRegional', 'witel.namaWitel', 'sto.namaSto','sto.idSto', 'sto.codeSto')
            ->get();

            return view('sto',['sto' => $sto]);
    }

    public function Add()
    {
        // memanggil view tambah
	    return view('stoadd');
    }

    public function Store(Request $request)
    {
        // insert data ke table sto
        DB::table('sto')->insert([
            'idRegional' => $request->regional,
            'idWitel' => $request->witel,
            'namaSto' => $request->stoName,
            'codeSto' => $request->stoCode
        ]);
        // alihkan halaman ke halaman sto
        return redirect('/sto');
    }

    public function Edit($id)
    {
        $sto = DB::table('sto')->where('idSto',$id)->get();
        return view('stoedit',['sto' => $sto]);
    }
    public function Update(Request $request)
    {
        // update data sto
        DB::table('sto')->where('idSto',$request->id)->update([
            'idRegional' => $request->regional,
            'idWitel' => $request->witel,
            'namaSto' => $request->stoName,
            'codeSto' => $request->stoCode
        ]);
        // alihkan halaman ke halaman sto
        return redirect('/sto');
    }
    
    public function Delete($id)
    {
        // menghapus data sto berdasarkan id yang dipilih
        DB::table('sto')->where('idSto',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/sto');
    }
}
