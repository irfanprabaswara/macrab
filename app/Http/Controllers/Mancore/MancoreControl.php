<?php

namespace App\Http\Controllers\Mancore;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Alert;
use App\Distribusi;
use App\Feeder;
use App\Ftmea;
use App\Ftmoa;
use App\Models\GPON\GPON;
use App\Odc;
use App\Odp;
use App\StatusCore\StatusCore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MancoreControl extends Controller
{
    public function index()
    {
        $mancore = DB::select("SELECT
        gpon.idGpon,
        gpon.ipGpon,
        gpon.panel,
        gpon.slot,
        gpon.port,
        ftmea.rak as earak,
        ftmea.panel as eapanel,
        ftmea.slot as easlot,
        ftmea.port as eaport,
        ftmoa.rak as oarak,
        ftmoa.panel as oapanel,
        ftmoa.slot as oaslot,
		ftmoa.core as oacore,
        feeder.idStatusCore,
        feeder.fe,
        feeder.lat1,
        feeder.lat2,
        feeder.long1,
        feeder.long2,
        feeder.lat3,
        feeder.long3,
        statuscore.statusCore,
        odc.inPanel,
        odc.portIn,
        odc.outPsKe,
        odc.outPanel,
        odc.portOut,
        distribusi.idStatusCore,
        distribusi.dis,
        distribusi.core,
        odp.idStatusData,
        odp.codeOdp,
        odp.alamatOdp,
        odp.latitude,
        odp.longitude
    FROM
        gpon
    INNER JOIN
        ftmea
    ON
        (
            gpon.idGpon = ftmea.idGpon)
    INNER JOIN
        ftmoa
    ON
        (
            ftmea.idGpon = ftmoa.idGpon)
    AND
        (
            ftmea.idFtmEa = ftmoa.idFtmEa)
    INNER JOIN
        feeder
    ON
        (
            ftmoa.idFtmOa = feeder.idFtmOa)
    AND
        (
            ftmoa.idFtmEa = feeder.idFtmEa)
    AND
        (
            ftmoa.idGpon = feeder.idGpon)
    INNER JOIN
        odc
    ON
        (
            feeder.idFeeder = odc.idFeeder)
    AND
        (
            feeder.idFtmOa = odc.idFtmOa)
    AND
        (
            feeder.idFtmEa = odc.idFtmEa)
    AND
        (
            feeder.idGpon = odc.idGpon)
    INNER JOIN
        distribusi
    ON
        (
            odc.idOdc = distribusi.idOdc)
    AND
        (
            odc.idFeeder = distribusi.idFeeder)
    AND
        (
            odc.idFtmOa = distribusi.idFtmOa)
    AND
        (
            odc.idFtmEa = distribusi.idFtmEa)
    AND
        (
            odc.idGpon = distribusi.idGpon)
    INNER JOIN
        statuscore
    ON
        (
            distribusi.idStatusCore = statuscore.idStatusCore)
    INNER JOIN
        odp
    ON
        (
            distribusi.idDistribusi = odp.idDistribusi)
    AND
        (
            distribusi.idOdc = odp.idOdc)
    AND
        (
            distribusi.idFeeder = odp.idFeeder)
    AND
        (
            distribusi.idFtmOa = odp.idFtmOa)
    AND
        (
            distribusi.idFtmEa = odp.idFtmEa)
    AND
        (
            distribusi.idGpon = odp.idGpon);");
    $totalFeeder = DB::select("SELECT COUNT(*) as TotalFeeder
    FROM feeder;");
    $feederOk = DB::select("SELECT COUNT(*) as feederOk
    FROM feeder
    WHERE idstatuscore = 1;");
    $feederNg = DB::select("SELECT COUNT(*) as feederNg
    FROM feeder
    WHERE idstatuscore = 2;");

    $totalDistribusi = DB::select("SELECT COUNT(*) as totalDistribusi
    FROM distribusi;");
    $distribusiOk = DB::select("SELECT COUNT(*) as distribusiOk
    FROM feeder
    WHERE idstatuscore = 1;");
    $distribusiNg = DB::select("SELECT COUNT(*) as distribusiNg
    FROM feeder
    WHERE idstatuscore = 2;");
    $distribusiIdle = DB::select("SELECT COUNT(*) as distribusiIdle
    FROM odp
    WHERE codeOdp = null OR codeOdp = '';");

    // dd($totalFeeder);
        return view('index', ['mancore' => $mancore, 'totalFeeder' => $totalFeeder, 'feederOk' => $feederOk, 'feederNg' => $feederNg,
        'totalDistribusi' => $totalDistribusi, 'distribusiOk' => $distribusiOk, 'distribusiNg' => $distribusiNg, 'distribusiIdle' => $distribusiIdle]);

        // dd($mancore);
    }

    public function insert_mancore()
    {
        $data['title'] = 'Tambah Data Mancore';
        $getGpon = DB::table('gpon')
        ->select('*')
        ->get();
        return view('mancore.insert_mancore', $data, [ 'getGpon'=> $getGpon]);
    }

    public function post_mancore(Request $request)
    {
        // insert data
        //All Process butuh idRegional, idWitel, idSto dulu mas iz
        // $gpon = Gpon::firstOrCreate(
        //     ['ipGpon' => $request->ipGpon],
        //     ['panel' => $request->panel],
        //     ['slot' => $request->slot],
        //     ['port' => $request->port]
        // );
        $idGpon =$request->ipGpon;

        $ftmea = Ftmea::firstOrCreate(
            ['idGpon' => $idGpon],
            ['rak' => $request->rak],
            ['panel' => $request->panel],
            ['slot' => $request->slot],
            ['port' => $request->port]
        );
        $idftmEa = $ftmea->idFtmEa;

        $ftmoa = Ftmoa::firstOrCreate(
            ['idGpon' => $idGpon],
            ['idFtmEa' => $idftmEa],
            ['rak' => $request->rak],
            ['panel' => $request->panel],
            ['slot' => $request->slot],
            ['core' => $request->core]
        );
        $idftmOa = $ftmoa->idFtmOa;

        $feeder = Feeder::firstOrCreate(
            ['idGpon' => $idGpon],
            ['idFtmEa' => $idftmEa],
            ['idFtmOa' => $idftmOa],
            ['idStatusCore' => '1'],
            ['fe' => $request->fe],
            ['lat1' => $request->lat1],
            ['long1' => $request->long1],
            ['lat2' => $request->lat2],
            ['long2' => $request->long2],
            ['lat3' => $request->lat3],
            ['long3' => $request->long3]
        );
        $idFeeder = $feeder->idFeeder;

        // $statusCore = StatusCore::firstOrCreate(
        //     ['statusCore' => $request->statusCore]
        // );

        $odc = Odc::firstOrCreate(
            ['idGpon' => $idGpon],
            ['idFtmEa' => $idftmEa],
            ['idFtmOa' => $idftmOa],
            ['idFeeder' => $idFeeder],
            ['odcCode' => $request->odcCode],
            ['inPanel' => $request->inPanel],
            ['portIn' => $request->portIn],
            ['outPsKe' => $request->outPsKe],
            ['outPanel' => $request->outPanel],
            ['portOut' => $request->portOut]
        );
        $idOdc = $odc->idOdc;

        $distribusi = Distribusi::firstOrCreate(
            ['idGpon' => $idGpon],
            ['idFtmEa' => $idftmEa],
            ['idFtmOa' => $idftmOa],
            ['idFeeder' => $idFeeder],
            ['idOdc' => $idOdc],
            ['idStatusCore' => '1'],
            ['dis' => $request->dis],
            ['core' => $request->core]
        );
        $idDistribusi = $distribusi->idDistribusi;

        $odp = Odp::firstOrCreate(
            ['idGpon' => $idGpon],
            ['idFtmEa' => $idftmEa],
            ['idFtmOa' => $idftmOa],
            ['idFeeder' => $idFeeder],
            ['idOdc' => $idOdc],
            ['idDistribusi' => $idDistribusi],
            ['idStatusData' => '1'],
            ['codeOdp' => $request->codeOdp],
            ['alamatOdp' => $request->alamatOdp],
            ['latitude' => $request->latitude],
            ['longitude' => $request->longitude]
        );


        // dd($gpon, $ftmea, $ftmoa, $feeder, $odc, $distribusi, $odp);

        // alihkan halaman ke halaman view driver
        // if ($gpon) {
        //     Alert::success('Berhasil', 'Data Proteksi Tower Berhasil Ditambahkan');
        //     return redirect('/')->with('Tambah Data Sukses !');
        // }
    }
    public function doAddGpon(Request $request){

       $data = DB::table('gpon')->insert([
            'ipGpon' => $request->ipgpon,
            // 'namaWitel' => $request->witelName,
            // 'codeWitel' => $request->witelCode
        ]);
        dd(DB::getPdo()->lastInsertId());

        // exit();
    }
    public function getGpon(Request $request){

        $witel = DB::table('gpon')
        ->select('*')
        ->get();

         // exit();
     }

}
