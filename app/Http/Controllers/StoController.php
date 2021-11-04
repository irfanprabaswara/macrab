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

        $sto = DB::table('sto')
        ->select('sto.namaSto','sto.idSto','sto.codeSto')
        ->get();

        $witel = DB::table('witel')
        ->select('witel.namaWitel','witel.idWitel','witel.codeWitel')
        ->get();

        $regional = DB::table('regional')
        ->select('regional.namaRegional','regional.idRegional')
        ->get();
        return view('stoadd', ['sto' => $sto,'witel' => $witel,'regional' => $regional]);

    }

    public function Store(Request $request)
    {
        // dd($request);
        // insert data ke table sto
        DB::table('sto')->insert([
            'idRegional' => $request->regional,
            'idWitel' => $request->witel,
            'namaSto' => $request->name,
            'codeSto' => $request->stoCode
        ]);
        // alihkan halaman ke halaman sto
        return redirect('/sto');
    }

    public function Edit($id)
    {
        
        // $sto = DB::table('sto')
        // ->select('sto.namaSto','sto.idSto','sto.codeSto')
        // ->get();

        $witel = DB::table('witel')
        ->select('witel.namaWitel','witel.idWitel','witel.codeWitel')
        ->get();

        $regional = DB::table('regional')
        ->select('regional.namaRegional','regional.idRegional')
        ->get();

        $sto = DB::table('sto')->where('idSto',$id)->get();
        return view('stoedit',['sto' => $sto,'witel' => $witel,'regional' => $regional]);

    }
    public function Update(Request $request)
    {
        // update data sto
        DB::table('sto')->where('idSto',$request->id)->update([
            'idRegional' => $request->regional,
            'idWitel' => $request->idWitel,
            'namaSto' => $request->name,
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
