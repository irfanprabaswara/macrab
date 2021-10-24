INSERT INTO statuscore(idStatusCore, statusCore, createdBy, createdTime)
VALUES ('1', 'OK', 'uhuy', '2021-10-19 23:47:43'), ('2', 'NOK', 'uhuy', '2021-10-19 23:47:43');

INSERT INTO statusdata (idStatusData,statusData,createdBy,createdTime)
VALUES ('1', 'Aktif', 'uhuy', '2021-10-19 23:47:43'), ('2', 'Pending Edit', 'uhuy', '2021-10-19 23:47:43'), ('3', 'Pending Booking', 'uhuy', '2021-10-19 23:47:43'), ('4', 'Booked', 'uhuy', '2021-10-19 23:47:43'), ('5', 'Deleted', 'uhuy', '2021-10-19 23:47:43');

INSERT INTO jenisodp (idJenisOdp, codeJenisOdp, jenisOdp, createdBy, createdTime)
VALUES ('1', 'PB', 'Pedestrial Building', 'uhuy', '2021-10-19 23:47:43');

INSERT INTO statustiket (idStatusTiket, deskripsiStatus, createdBy, createdTime)
VALUES ('1', 'Approved', 'uhuy', '2021-10-19 23:47:43'), ('2', 'Declined', 'uhuy', '2021-10-19 23:47:43'), ('3', 'Pending', 'uhuy', '2021-10-19 23:47:43');

INSERT INTO regional (idRegional,namaRegional, createdBy, createdTime)
VALUES ('1', 'Regional 6', 'uhuy', '2021-10-19 23:47:43');

INSERT INTO witel (idWitel, idRegional, namaWitel, createdBy, createdTime)
VALUES ('1', '1', 'Balikpapan', 'uhuy', '2021-10-19 23:47:43');

INSERT INTO sto (idSto, idWitel, idRegional, codeSto, namaSto, createdBy, createdTime)
VALUES ('1', '1', '1', 'BAM', 'Batu Ampar', 'uhuy', '2021-10-19 23:47:43');

INSERT INTO gpon (idGpon, idSto, idWitel, idRegional, ipGpon, panel, slot, port, createdBy, createdTime)
VALUES ('1', '1', '1', '1', '192.168.1.1', '0', '1', '5', 'uhuy', '2021-10-19 23:47:43');

INSERT INTO ftmea (idFtmEa,idGpon,idSto,idWitel, idRegional, rak, panel, slot, port, createdBy, createdTime)
VALUES ('1', '1', '1', '1', '1', '-', '-', '-', '-', 'uhuy', '2021-10-19 23:47:43');

INSERT INTO ftmoa (idFtmOa,idFtmEa,idGpon,idSto,idWitel,idRegional,rak,panel,slot,core,createdBy,createdTime)
VALUES ('1', '1', '1', '1', '1', '1', '1', '1', '1','1', 'uhuy', '2021-10-19 23:47:43');

INSERT INTO feeder (idFeeder,idFtmOa,idFtmEa,idGpon,idSto,idWitel,idRegional,idStatusCore,lat1,long1,lat2,long2,lat3,long3,createdBy,createdTime)
VALUES ('1', '1', '1', '1', '1', '1', '1', '1', ' 0.5312863', '112.789274', , , , , 'uhuy', '2021-10-19 23:47:43');

INSERT INTO odc (idOdc,idFeeder,idFtmOa,idFtmEa,idGpon,idSto,idWitel,idRegional,odcCode,inPanel,portIn,outPsKe,outPanel,portOut,createdBy,createdTime)
VALUES ( '1', '1', '1', '1', '1', '1', '1', '1','ODP-PUT-FG', '1', '1', '1', '5', '1', 'uhuy', '2021-10-19 23:47:43');

INSERT INTO distribusi (idDistribusi,idOdc,idFeeder,idFtmOa,idFtmEa, idGpon, idSto, idWitel,idRegional,dis,idStatusCore,core,createdBy,createdTime)
VALUES ('1', '1', '1', '1', '1', '1', '1', '1' ,'1' ,'1','D01','uhuy', '2021-10-19 23:47:43');

INSERT INTO odp (idOdp, idDistribusi, idOdc, idFeeder, idFtmOa, idFtmEa, idGpon, idSto, idJenisOdp, idWitel, idStatusData, idRegional, codeOdp, alamatOdp, latitude, longitude, createdBy, createdTime)
VALUES ('1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'ODP-PUT-FG/001', 'JALAN MENTEBAH DEPAN RUMAH WARNA MERAH', '0.531115', '112.781518', 'uhuy', '2021-10-19 23:47:43');

