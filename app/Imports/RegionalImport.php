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
        $regional = Regional::firstOrCreate([
        'namaRegional' => $rows[0][3]
        ]);
        $idRegional = $regional->idRegional;

        $witel = Witel::firstOrCreate([
            'namaWitel' => $rows[1][3]
            ]);
        $idWitel = $witel->idWitel;
        dd($idWitel);

        $sto = Sto::firstOrCreate([
            'namaSto' => $rows[2][3]
            ]);
        $idSto = $sto->idSto;

        $odc = Odc::firstOrCreate([
            'codeOdc' => $rows[3][3]
            ]);
        $codeOdc = $odc->idOdc;

        // dd($idRegional[0]->idRegional);
        // dd($idWitel[0]->idWitel);
        // dd($idSto[0]->idSto);
        $kepo = count($rows);
        dd($kepo);
        foreach ($rows as $index=>$row) {
            while ($index<$kepo+1) {
                if($index>5){
                    DB::table('a')->insert([
                    'email' => $row[0], //kolom 1
                    'votes' => $row[1] //kolom 2
                    ]);
                    DB::table('b')->insert([
                        'email' => $row[2], //kolom 3
                        'votes' => $row[3] //kolom 4
                    ]);
                }
                else
                {
                    continue;
                }
            }
        }
    }
}
