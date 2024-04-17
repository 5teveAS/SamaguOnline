<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class All implements WithMultipleSheets
{
    use Exportable;

    public function __construct()
    {
        
    }
    /**
     * 
    * @return array
    */
    public function sheets(): array
    {
        $sheets = [];
        array_push($sheets, new ExportBills());
        array_push($sheets, new ExportCustomer());
        array_push($sheets, new ExportEmployee());
        array_push($sheets, new ExportExpenses());
        array_push($sheets, new ExportInventory());
        array_push($sheets, new ExportProject());
        array_push($sheets, new ExportSupplier());
        array_push($sheets, new ExportUser());
        
        return $sheets;

    }
}
