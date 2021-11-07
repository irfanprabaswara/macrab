<?php

namespace App\Exports;
use App\Regional;
use App\Witel;
use App\Sto;
use App\Gpon;
use App\Ftmea;
use App\Ftmoa;
use App\Feeder;
use App\Odc;
use App\Distribusi;
use App\Odp;
use App\JenisOdp;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
// use Illuminate\Support\Facades\DB;
use DB;

class RegionalExport implements FromView
// ,FromQuery
// ,FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Regional::all();
    // }

    // public function query()
    // {
    //     return Invoice::query();
    // }

    public function view(): View
    {
        $mancore = \DB::select("SELECT
        gpon.idGpon,
        gpon.ipGpon,
        gpon.panel,
        gpon.slot,
        gpon.port,
        ftmea.idFtmEa,
        ftmea.rak as earak,
        ftmea.panel as eapanel,
        ftmea.slot as easlot,
        ftmea.port as eaport,
        ftmoa.idFtmOa,
        ftmoa.rak as oarak,
        ftmoa.panel as oapanel,
        ftmoa.slot as oaslot,
		ftmoa.core as oacore,
        feeder.idFeeder,
        feeder.idStatusCore,
        feeder.fe,
        feeder.lat1,
        feeder.lat2,
        feeder.long1,
        feeder.long2,
        feeder.lat3,
        feeder.long3,
        statuscore.statusCore,
        odc.idOdc,
        odc.inPanel,
        odc.portIn,
        odc.outPsKe,
        odc.outPanel,
        odc.portOut,
        distribusi.idDistribusi,
        distribusi.idStatusCore,
        distribusi.dis,
        distribusi.core,
        odp.idOdp,
        odp.idStatusData,
        odp.codeOdp,
        odp.alamatOdp,
        odp.latitude,
        odp.longitude,
        jenisodp.codeJenisOdp,
        sto.codeSto
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
            distribusi.idGpon = odp.idGpon)
    LEFT JOIN jenisodp
    		ON odp.idJenisOdp = jenisodp.idJenisOdp
    LEFT JOIN sto
            ON odp.idSto = sto.idSto;");
        return view('export', ['mancore' => $mancore]);
    }
}
