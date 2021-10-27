<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WitelController extends Controller
{
    // if (empty(Auth::user())) {
    //     return redirect('/login', 'refresh');
    // } else {
    //     return view('mytickets');

    public function Index()
    {
        $witel = DB::table('witel')
            ->join('regional', 'witel.idRegional', '=', 'regional.idRegional')
            ->select('regional.namaRegional', 'witel.namaWitel', 'witel.idWitel')
            ->get();

            return view('witel',['witel' => $witel]);
            // return view('witel');
    }

    public function Add()
    {
        // memanggil view tambah
	    return view('witeladd');
    }

    public function Store(Request $request)
    {
        // insert data ke table witel
        DB::table('witel')->insert([
            'idRegional' => $request->regional,
            'namaWitel' => $request->witelName,
            'codeWitel' => $request->witelCode
        ]);
        // alihkan halaman ke halaman witel
        return redirect('/witel');
    }

    public function Edit($id)
    {
        $witel = DB::table('witel')->where('idWitel',$id)->get();
        return view('witeledit',['witel' => $witel]);
    }
    public function Update(Request $request)
    {
        // update data witel
        DB::table('witel')->where('idWitel',$request->id)->update([
            'idRegional' => $request->regional,
            'namaWitel' => $request->witelName,
            'codeWitel' => $request->witelCode
        ]);
        // alihkan halaman ke halaman sto
        return redirect('/witel');
    }
    
    public function Delete($id)
    {
        // menghapus data witel berdasarkan id yang dipilih
        DB::table('witel')->where('idWitel',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/witel');
    }
}
