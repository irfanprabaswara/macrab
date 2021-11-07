<?php

namespace App\Models\GPON;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GPON extends Model
{
    protected $table = "gpon";
<<<<<<< Updated upstream


    protected $fillable = ['idSto', 'idWitel', 'idRegional', 'ipGpon', 'panel', 'slot', 'port', 'createdBy', 'createdTime', 'modifiedBy', 'modifiedTime', 'created_at', 'updated_at'];
=======
    

    protected $fillable = ['idSto','idWitel','idRegional','ipGpon','panel','slot','port','createdBy','createdTime','modifiedBy','modifiedTime', 'created_at', 'updated_at'];
>>>>>>> Stashed changes

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
        'deleted_at' => 'datetime:Y-m-d h:i:s'
    ];
<<<<<<< Updated upstream


    public static function getRowId($idOdp)
    {
        $mancore = DB::select("SELECT DISTINCT
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
            distribusi.idGpon = odp.idGpon)
            where odp.idOdp = $idOdp;");

        $data = $mancore;

        return $data;
    }
=======
>>>>>>> Stashed changes
}
