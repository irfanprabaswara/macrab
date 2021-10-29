<?php

namespace App\Http\Controllers\Mancore;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Alert;
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
        ftmoa.rak,
        ftmoa.panel,
        ftmoa.slot,
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
        return view('index', ['mancore' => $mancore]);

        // dd($mancore);
    }

    public function insert_mancore()
    {
        $data['title'] = 'Tambah Data Mancore';
        return view('mancore.insert_mancore', $data);
    }
}
