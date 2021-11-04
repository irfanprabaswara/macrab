<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HistoryDataControl extends Controller
{
    public function get()
    {
        if (empty(Auth::user())) {
            return redirect('/login', 'refresh');
        } else {
            return view('tampil_history_data');
        }
    }

    public function index()
    {
        $historyData = DB::select("SELECT
        gpontemp.ipGpon,
        gpontemp.panel,
        gpontemp.slot,
        gpontemp.port,
        ftmeatemp.rak as earak,
        ftmeatemp.panel as eapanel,
        ftmeatemp.slot as easlot,
        ftmeatemp.port as eaport,
        ftmoatemp.rak,
        ftmoatemp.panel,
        ftmoatemp.slot,
        ftmoatemp.core,
        feedertemp.idFeederTemp,
        feedertemp.lat1,
        feedertemp.long1,
        feedertemp.lat2,
        feedertemp.long2,
        feedertemp.lat3,
        feedertemp.long3,
        odctemp.inPanel,
        odctemp.portIn,
        odctemp.outPsKe,
        odctemp.outPanel,
        odctemp.portOut,
        distribusitemp.dis,
        distribusitemp.core,
        odptemp.codeOdp,
        odptemp.alamatOdp,
        odptemp.idJenisOdp,
        odptemp.latitude,
        odptemp.longitude
    FROM
        distribusitemp,
        feedertemp,
        ftmeatemp,
        ftmoatemp,
        gpontemp,
        odctemp,
        odptemp ;");

        return view('tampil_history_data', ['historyData' => $historyData]);

        // dd($mancore);
    }
}
