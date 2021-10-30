<?php

namespace App\Imports;

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
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;

class RegionalImport implements WithMultipleSheets, ToCollection
// ToModel
// WithMappedCells
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function sheets(): array
    {
        return [
            0 => $this,
        ];
    }

    // public function mapping(): array
    // {
    //     return [
    //         'namaRegional'  => 'D1',
    //     ];
    // }

    

    // public function model(array $row)
    // {
    //     dd($row);
    //     return new Regional([
    //         'namaRegional' => $row['namaRegional'],
    //         'createdBy' => Auth::user()->name,
    //         'createdTime' => Carbon::now(),
    //     ]);
    // }

    public function collection(Collection $rows)
    {
        // dd($rows);
        //get regional id
        $regional = Regional::firstOrCreate([
        'namaRegional' => $rows[0][3]
        ]);
        $idRegional = $regional->idRegional;

        //get witel id
        $witel = Witel::firstOrCreate([
            'namaWitel' => $rows[1][3]
            ]);
        $idWitel = $witel->idWitel;

        //get sto id
        $sto = Sto::firstOrCreate([
            'namaSto' => $rows[2][3]
            ]);
        $idSto = $sto->idSto;

        //get odc id
        // $odc = Odc::firstOrCreate([
        //     'codeOdc' => $rows[3][3]
        //     ]);
        $codeOdc = $rows[3][3];
        // dd($idGpon);
        // dd(Carbon::now()->toDateTimeString());
        
        // $gpon = Gpon::firstOrCreate(
        //     [
        //         'idSto' => 1,
        //         'idWitel' => 1,
        //         'idRegional' => 1,
        //         'ipGpon' => "192.168.1.1",
        //         'panel' => 1,
        //         'slot' => 1,
        //         'port' => 1,
        //     ],
        //     [
        //         'createdBy' => 1,
        //         'modifiedBy' => 1
        //     ]);
        // return response()->json([
        //     'id'=>$gpon->idGpon
        // ]);
        // dd($gpon->idGpon);
        foreach ($rows as $index=>$row) 
        {
                if($index>7)
                {
                    //insert table gpon
                    $cekGpon = Gpon::select('idGpon')
                            ->where('idSto', '=', 1)
                            ->where('idWitel', '=', 1)
                            ->where('idRegional', '=', 1)
                            ->where('ipGpon', '=', "192.168.1.1")
                            ->where('panel', '=', 0)
                            ->where('slot', '=', 1)
                            ->where('port', '=', 1)
                            ->get();
                    if ($cekGpon->isEmpty())
                    {
                        dd("empty");
                        DB::table('gpon')->insert([
                            'idSto' => $idSto,
                            'idWitel' => $idWitel,
                            'idRegional' => $idRegional,	
                            'ipGpon' => 1,
                            'panel'=> 1,
                            'slot' => 1,	
                            'port' => 1,	
                            'createdBy' => Auth::user()->name,	
                            'createdTime' => Carbon::now()->toDateTimeString(),	
                            'modifiedBy' => Auth::user()->name,
                            'modifiedTime' => Carbon::now()->toDateTimeString()
                        ]);
                        $users = \DB::insert("INSERT INTO gpon (idSto, idWitel, idRegional, ipGpon, panel, slot, port, createdBy, createdTime, modifiedBy, modifiedTime) 
                        VALUES ('1', '1', '1', '123.1.1.1', '1', '1', '1', 'uhuy', '2021-10-30 19:27:33.000000', 'uhuy', '2021-10-30 19:27:33.000000')");
                    }
                    else
                    {
                        dd("isi");
                        $idGpon = $cekGpon->idGpon;
                        dd($idGpon);
                    }
                    $idGpon = DB::select("SELECT idGpon 
                        FROM gpon
                        ORDER BY idGpon DESC
                        LIMIT 1");
                        dd($idGpon);
                    // $idGpon = $gpon->idGpon;
                    dd($idGpon);
                    DB::table('gpon')
                        ->where('idGpon', $idGpon)
                        ->update(
                            ['createdBy' => Auth::user()->name],
                            ['createdTime' => Carbon::now()->toDateTimeString()],
                            ['modifiedBy' => Auth::user()->name],
                            ['modifiedTime' => Carbon::now()->toDateTimeString()]
                        );
                    dd($idGpon);
                    //insert table ftmea
                    $ftmea = Ftmea::firstOrCreate([
                        'idGpon' => $idGpon,
                        'idSto' => $idSto,
                        'idWitel' => $idWitel,
                        'idRegional' => $idRegional,
                        'rak' => $row[5],
                        'panel' => $row[6],
                        'slot' => $row[7],
                        'port' => $row[8]
                        ]);
                    $idftmEa = $ftmea->idFtmEa;
                    DB::table('ftmea')
                        ->where('idFtmEa', $idftmEa)
                        ->update(
                            ['createdBy' => Auth::user()->name],
                            ['createdTime' => Carbon::now()->toDateTimeString()],
                            ['modifiedBy' => Auth::user()->name],
                            ['modifiedTime' => Carbon::now()->toDateTimeString()]
                        );

                    //insert table ftmoa
                    $ftmoa = Ftmoa::firstOrCreate([
                        'idFtmEa' => $idftmEa,
                        'idGpon' => $idGpon,
                        'idSto' => $idSto,
                        'idWitel' => $idWitel,
                        'idRegional' => $idRegional,
                        'rak' => $row[9],
                        'panel' => $row[10],
                        'slot' => $row[11],
                        'core' => $row[12]
                        ]);
                    $idftmOa = $ftmoa->idFtmOa;
                    DB::table('ftmoa')
                        ->where('idFtmOa', $idftmOa)
                        ->update(
                            ['createdBy' => Auth::user()->name],
                            ['createdTime' => Carbon::now()->toDateTimeString()],
                            ['modifiedBy' => Auth::user()->name],
                            ['modifiedTime' => Carbon::now()->toDateTimeString()]
                        );

                    //insert table feeder
                    $feeder = Feeder::firstOrCreate([
                        'idFtmOa' => $idftmOa,
                        'idFtmEa' => $idftmEa,
                        'idGpon' => $idGpon,
                        'idSto' => $idSto,
                        'idWitel' => $idWitel,
                        'idRegional' => $idRegional,
                        'idStatusCore' => '1',
                        'fe' => $row[13],
                        'lat1' => $row[14],
                        'long1' => $row[14],
                        'lat2' => $row[15],
                        'long2' => $row[15],
                        'lat3' => $row[16],
                        'long3' => $row[16]
                        ]);
                    $idFeeder = $feeder->idFeeder;
                    DB::table('feeder')
                        ->where('idFeeder', $idFeeder)
                        ->update(
                            ['createdBy' => Auth::user()->name],
                            ['createdTime' => Carbon::now()->toDateTimeString()],
                            ['modifiedBy' => Auth::user()->name],
                            ['modifiedTime' => Carbon::now()->toDateTimeString()]
                        );

                    //insert table odc
                    $odc = Odc::firstOrCreate([
                        'idFeeder' => $idFeeder,
                        'idFtmOa' => $idftmOa,
                        'idFtmEa' => $idftmEa,
                        'idGpon' => $idGpon,
                        'idSto' => $idSto,
                        'idWitel' => $idWitel,
                        'idRegional' => $idRegional,
                        'inPanel' => $row[17],
                        'portIn' => $row[18],
                        'outPsKe' => $row[19],
                        'outPanel' => $row[20],
                        'portOut' => $row[21],
                        'codeOdc' => $codeOdc
                        ]);
                    $idOdc = $odc->idOdc;
                    DB::table('odc')
                        ->where('idOdc', $idOdc)
                        ->update(
                            ['createdBy' => Auth::user()->name],
                            ['createdTime' => Carbon::now()->toDateTimeString()],
                            ['modifiedBy' => Auth::user()->name],
                            ['modifiedTime' => Carbon::now()->toDateTimeString()]
                        );

                    //insert table distribusi
                    $distribusi = Distribusi::firstOrCreate([
                        'idOdc' => $idOdc,
                        'idFeeder' => $idFeeder,
                        'idFtmOa' => $idftmOa,
                        'idFtmEa' => $idftmEa,
                        'idGpon' => $idGpon,
                        'idSto' => $idSto,
                        'idWitel' => $idWitel,
                        'idRegional' => $idRegional,
                        'dis' => $row[22],
                        'idStatusCore' => '1',
                        'core' => $row[23]
                        ]);
                    $idDistribusi = $distribusi->idDistribusi;
                    DB::table('distribusi')
                        ->where('idDistribusi', $idDistribusi)
                        ->update(
                            ['createdBy' => Auth::user()->name],
                            ['createdTime' => Carbon::now()->toDateTimeString()],
                            ['modifiedBy' => Auth::user()->name],
                            ['modifiedTime' => Carbon::now()->toDateTimeString()]
                        );
                    
                    $idJenisOdp = DB::table('jenisodp')->where('codeJenisOdp', '=', $row[25])
                        ->select('idJenisOdp')
                        ->get();
                    //insert table odp
                    $odp = Odp::firstOrCreate([
                        'idDistribusi' => $idDistribusi,
                        'idOdc' => $idOdc,
                        'idFeeder' => $idFeeder,
                        'idFtmOa' => $idftmOa,
                        'idFtmEa' => $idftmEa,
                        'idGpon' => $idGpon,
                        'idSto' => $idSto,
                        'idWitel' => $idWitel,
                        'idRegional' => $idRegional,
                        'idJenisOdp' => $idJenisOdp, 
                        'idStatusData' => '1',
                        'codeOdp' => $row[24],
                        'alamatOdp' => $row[26],
                        'latitude' => $row[27],
                        'longitude' => $row[28]
                        ]);
                    $idOdp = $odp->idOdp;
                    DB::table('odp')
                        ->where('idOdp', $idOdp)
                        ->update(
                            ['createdBy' => Auth::user()->name],
                            ['createdTime' => Carbon::now()->toDateTimeString()],
                            ['modifiedBy' => Auth::user()->name],
                            ['modifiedTime' => Carbon::now()->toDateTimeString()]
                        );
                }
                else
                {
                    continue;
                }
        }
    }
}
