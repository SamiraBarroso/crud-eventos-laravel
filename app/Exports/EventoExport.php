<?php

namespace App\Exports;

use App\Models\ModelEvento;
use Maatwebsite\Excel\Concerns\FromCollection;

class EventoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ModelEvento::all();
    }
}
