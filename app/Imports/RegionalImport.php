<?php

namespace App\Imports;

use App\Regional;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class RegionalImport implements WithMultipleSheets, WithMappedCells, ToModel
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

    public function mapping(): array
    {
        return [
            'namaRegional'  => 'D1',
        ];
    }

    

    public function model(array $row)
    {
        return new Regional([
            'namaRegional' => $row['namaRegional'],
            'createdBy' => Auth::user()->name,
            'createdTime' => Carbon::now(),
        ]);
    }
}
