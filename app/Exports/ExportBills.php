<?php

namespace App\Exports;

use App\Models\Bill;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportBills implements FromCollection, WithTitle, WithHeadings, WithStyles, ShouldAutoSize, WithEvents, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bill::select('bill_number','bill_concept','description','amount','date_issue','bill_status')->get();
    }

    public function title(): string{
        return 'Facturas';
    }
    public function headings(): array{
        return ['ID Factura','Concepto de Factura','Descripcion','Monto','Fecha de emision','Estado Factura'];
    }
    public function styles(Worksheet $sheet)
    {
     return [ 
         1 => ['font' => ['bold' => true]],
    ];
    }
    public function registerEvents(): array
    {
        return[
            AfterSheet::class => function(AfterSheet $event){
                $event->sheet->getDelegate()->getStyle('1')->getFont()->setSize(14);
            },
        ];
    }
    public function columnFormats(): array
    {
        return[
            'D' =>'"₡ "#,##0.00_-',
            /* 
                Estos es para formatear la fecha pero no la esta acomodando recheck
            'E' => NumberFormat::FORMAT_DATE_DDMMYYYY */
        ];
    }

}
