-- MENAMPILKAN TIKET ADMIN

-- get coreodp + jenisodp
select  odp.codeOdp as ODP, jenisodp.codeJenisOdp as JENIS,  odp.alamatOdp as ALAMAT, odp.latitude as LAT, odp.longitude as LON
from macrabdb.odp
left join macrabdb.jenisodp
on odp.idJenisOdp = jenisodp.idJenisOdp;


-- get data odp
SELECT tiket.idTiket as NO, odp.codeOdp as ODP, odp.alamatOdp as ALAMAT, odp.latitude as LAT, odp.longitude as LON, tiket.idStatusTiket as idstatus
from macrabdb.tiket
left join macrabdb.odp
on tiket.idOdc = odp.idOdp
where tiket.idStatusTiket = 3;

-- get status tiket
SELECT tiket.idTiket as idTiket, statustiket.deskripsiStatus as STATUS
from macrabdb.tiket
left join macrabdb.statustiket
on tiket.idStatusTiket = statustiket.idStatusTiket;


-- get status odp & tiket
SELECT xodp.idTiket as NO, xodp.ODP as ODP, xodp.ALAMAT as ALAMAT, xodp.LAT as LAT, xodp.LON as LON, xstatus.STATUS as STATUS
from (SELECT tiket.idTiket as idTiket, odp.codeOdp as ODP, odp.alamatOdp as ALAMAT, odp.latitude as LAT, odp.longitude as LON, tiket.idStatusTiket as idstatus
from macrabdb.tiket
left join macrabdb.odp
on tiket.idOdc = odp.idOdp
where tiket.idStatusTiket = 3) as xodp
left join (SELECT tiket.idTiket as idTiket, statustiket.deskripsiStatus as STATUS from macrabdb.tiket left join macrabdb.statustiket on tiket.idStatusTiket = statustiket.idStatusTiket) as xstatus
on xodp.idTiket = xstatus.idTiket;


-- get status odp & tiket & jenis odp
SELECT tiket.idTiket as NO, ODP, JENIS, ALAMAT, LAT, LON, tiket.idStatusTiket as idstatus
from macrabdb.tiket
left join (select odp.idOdp as idOdp, odp.codeOdp as ODP, jenisodp.codeJenisOdp as JENIS,  odp.alamatOdp as ALAMAT, odp.latitude as LAT, odp.longitude as LON
from macrabdb.odp
left join macrabdb.jenisodp
on odp.idJenisOdp = jenisodp.idJenisOdp) as xodp
on tiket.idOdc = xodp.idOdp
where tiket.idStatusTiket = 3;


-- draft tiket admin
SELECT tiket.idTiket as NO, gpon.ipGpon as IPGPON, gpon.panel as 'GPON PANEL', gpon.port as 'GPON PORT', gpon.slot as 'GPON SLOT',
ftmea.rak as 'FTMEA RAK', ftmea.panel as 'FTMEA PANEL', ftmea.slot as 'FTMEA SLOT', ftmea.port as 'FTMEA PORT',
ftmoa.rak as 'FTMOA RAK', ftmoa.panel as 'FTMOA PANEL', ftmoa.slot as 'FTMOA SLOT', ftmoa.core as 'FTMOA CORE',
concat(feeder.lat1,",",feeder.long1) as 'FEEDER CLOSURE1', concat(feeder.lat2,",",feeder.long2) as 'FEEDER CLOSURE2', concat(feeder.lat3,",",feeder.long3) as 'FEEDER CLOSURE3',
odc.inPanel as 'ODC IN PANEL', odc.portIn as 'ODC PORT', odc.outPsKe 'ODC OUT PS KE-', odc.outPanel as 'ODC OUT PANEL',
distribusi.dis as DISTRIBUSI, distribusi.core as 'DISTRIBUSI CORE', JENIS as 'ODP JENIS', ALAMAT as 'ODP ALAMAT', LAT as 'ODP LAT', LON as 'ODP LON', xstatus.STATUS as STATUS
from macrabdb.tiket
left join (select odp.idGpon as idgpon, odp.idFtmEa as idEa, odp.idFtmOa as idOa, odp.idFeeder as idfeed, odp.idOdc as ODC, odp.idDistribusi as iddist, odp.idOdp, odp.codeOdp as ODP, jenisodp.codeJenisOdp as JENIS,  odp.alamatOdp as ALAMAT, odp.latitude as LAT, odp.longitude as LON from macrabdb.odp left join macrabdb.jenisodp on odp.idJenisOdp = jenisodp.idJenisOdp) as xodp
on tiket.idOdc = xodp.idOdp
left join (SELECT tiket.idTiket as idTiket, statustiket.deskripsiStatus as STATUS from macrabdb.tiket left join macrabdb.statustiket on tiket.idStatusTiket = statustiket.idStatusTiket) as xstatus
on tiket.idTiket = xstatus.idTiket
left JOIN macrabdb.distribusi
on xodp.iddist=distribusi.idDistribusi
left JOIN macrabdb.odc
on xodp.ODC=odc.idOdc
left JOIN macrabdb.feeder
on xodp.idfeed=feeder.idFeeder
left JOIN macrabdb.ftmoa
on xodp.idOa=ftmoa.idFtmOa
left JOIN macrabdb.ftmEa
on xodp.idEa=ftmea.idFtmEa
left JOIN macrabdb.gpon
on xodp.idgpon=gpon.idGpon
where tiket.idStatusTiket = 3;
