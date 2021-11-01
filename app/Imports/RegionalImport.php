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
                if($index>7 && $row[1]!= null )
                {
                    $gpon = Gpon::firstOrCreate([
                            'idSto' => $idSto,
                            'idWitel' => $idWitel,
                            'idRegional' => $idRegional,
                            'ipGpon' => $row[1],
                            'panel' => $row[2],
                            'slot' => $row[3],
                            'port' => $row[4],
                        ],
                        [
                            'createdBy'=> Auth::user()->name,
                            'createdTime'=>Carbon::now()->toDateTimeString()
                        ]);
                    $idGpon = $gpon->idGpon;
                        /////////////////////////////////////////////////////////////////////////////////////////
                    
                    //insert table ftmea
                    $ftmea = Ftmea::firstOrCreate([
                            'idGpon' => $idGpon,
                            'idSto' => $idSto,
                            'idWitel' => $idWitel,
                            'idRegional' => $idRegional,
                            'rak' => $row[5],
                            'panel' => $row[6],
                            'slot' => $row[7],
                            'port' => $row[8],
                        ],
                        [
                            'createdBy'=> Auth::user()->name,
                            'createdTime'=>Carbon::now()->toDateTimeString()
                        ]);
                    $idftmEa = $ftmea->idFtmEa;
                    
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
                        'core' => $row[12],
                        ],
                        [
                            'createdBy'=> Auth::user()->name,
                            'createdTime'=>Carbon::now()->toDateTimeString()
                        ]);
                    $idftmOa = $ftmoa->idFtmOa;
                    
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
                        'long3' => $row[16],
                        ],
                        [
                            'createdBy'=> Auth::user()->name,
                            'createdTime'=>Carbon::now()->toDateTimeString()
                        ]);
                    $idFeeder = $feeder->idFeeder;

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
                        'codeOdc' => $codeOdc,
                        ],
                        [
                            'createdBy'=> Auth::user()->name,
                            'createdTime'=>Carbon::now()->toDateTimeString()
                        ]);
                    $idOdc = $odc->idOdc;
                    
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
                        'core' => $row[23],
                        ],
                        [
                            'createdBy'=> Auth::user()->name,
                            'createdTime'=>Carbon::now()->toDateTimeString()
                        ]);
                    $idDistribusi = $distribusi->idDistribusi;
                    
                    // $idJenisOdp = DB::table('jenisodp')->where('codeJenisOdp', '=', $row[25])
                    //     ->select('idJenisOdp')
                    //     ->get();

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
                        'idJenisOdp' => '1', 
                        'idStatusData' => '1',
                        'codeOdp' => $row[24],
                        'alamatOdp' => $row[26],
                        'latitude' => $row[27],
                        'longitude' => $row[28],
                        ],
                        [
                            'createdBy'=> Auth::user()->name,
                            'createdTime'=>Carbon::now()->toDateTimeString()
                        ]);
                    // $idOdp = $odp->idOdp;
                    // dd('hahahihi');
                }
                else
                {
                    continue;
                }
        }
    }
}