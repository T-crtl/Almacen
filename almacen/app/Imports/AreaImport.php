<?php

namespace App\Imports;

use App\Models\Area;
use Maatwebsite\Excel\Concerns\ToModel;

class AreaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Area([
            'id' => 0,
            'numero' => $row[1],
            'descripcion' => $row[2],
            'tipo' =>$row[3],
            'division' => $row[4],
            'plantelID' => $row[5],
            'edificioID' => $row[6],
            'nivel' => $row[7],

        ]);
    }
}
